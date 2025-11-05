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
        return $this->hasMany(ReviewAs::class);
    }

    public function reviewedReviewsForeigns(): HasMany
    {
        return $this->hasMany(ReviewAs::class);
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array<string, mixed>
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
                ($review->cost +
                    $review->speed +
                    $review->communication +
                    $review->reliability +
                    $review->quality +
                    $review->support +
                    $review->flexibility +
                    $review->innovation +
                    $review->value +
                    $review->timeliness) /
                10;
            $total += $avg;
            $count++;
        }

        return $count > 0 ? round($total / $count, 1) : 0;
    }

    public function toSearchableArray(): array
    {
        return array_merge($this->toArray(), [
            'id' => (string) $this->id,
            'name' => $this->name,
            'domain' => $this->domain,
            'slug' => $this->slug,

            // TODO: I believe country should be a relation to a countries table instead
            'country' => $this->country,
            'description' => $this->description,
            'created_at' => $this->created_at->timestamp,
        ]);
    }
}
