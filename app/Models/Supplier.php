<?php

namespace App\Models;

use App\Observers\SupplierObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

#[ObservedBy(SupplierObserver::class)]
class Supplier extends Model
{
    use HasFactory, Searchable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['domain', 'name', 'country', 'description'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'slug' => 'string',
        ];
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'reviewed_supplier_id');
    }

    public function reviewerReviews(): HasMany
    {
        return $this->hasMany(Review::class, 'reviewer_supplier_id');
    }

    public function reviewedReviewsForeigns(): HasMany
    {
        return $this->hasMany(Review::class, 'reviewed_supplier_id');
    }

    /**
     * Get the average rating for the supplier.
     *
     * @return float|int
     */
    public function getAverageRatingAttribute()
    {
        $reviews = $this->reviews()->get();
        if ($reviews->isEmpty()) {
            return 0;
        }

        $total = 0;
        $count = 0;
        foreach ($reviews as $review) {
            $avg =
                ($review->quality +
                    $review->accuracy +
                    $review->communication +
                    $review->cost +
                    $review->compliance +
                    $review->timeliness +
                    $review->support) /
                7;
            $total += $avg;
            $count++;
        }

        // Normalize to 5 stars (divide by 2 since scores are out of 10)
        return $count > 0 ? round(($total / $count) / 2, 1) : 0;
    }

    public function getRatingPercentage(int $stars): int
    {
        $reviews = $this->reviews;

        if ($reviews->isEmpty()) {
            return 0;
        }

        $matchingCount = $reviews->filter(function ($review) use ($stars) {
            $avg = ($review->quality +
                $review->accuracy +
                $review->communication +
                $review->cost +
                $review->compliance +
                $review->timeliness +
                $review->support) / 7;

            return round($avg / 2) == $stars;
        })->count();

        return (int) round(($matchingCount / $reviews->count()) * 100);
    }

    public function toSearchableArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'domain' => $this->domain,
            'description' => $this->description,
            'country' => $this->country,
        ];
    }
}
