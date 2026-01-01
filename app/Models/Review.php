<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reviewer_supplier_id',
        'reviewed_supplier_id',
        'user_id',
        'deal_date',
        'cost',
        'accuracy',
        'compliance',
        'communication',
        'quality',
        'support',
        'timeliness',
        'deal_again',
        'comment',
        'anonymous',
        'published',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'reviewer_supplier_id' => 'integer',
            'reviewed_supplier_id' => 'integer',
            'user_id' => 'integer',
            'deal_date' => 'date',
            'deal_again' => 'boolean',
            'anonymous' => 'boolean',
            'published' => 'boolean',
            'cost' => 'integer',
            'accuracy' => 'integer',
            'compliance' => 'integer',
            'communication' => 'integer',
            'quality' => 'integer',
            'support' => 'integer',
            'timeliness' => 'integer',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function reviewerSupplierForeign(): BelongsTo
    {
        return $this->belongsTo(SupplierAs::class);
    }

    public function reviewedSupplierForeign(): BelongsTo
    {
        return $this->belongsTo(SupplierAs::class);
    }

    public function reviewerSupplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function reviewedSupplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function getAverageScoreAttribute(): float
    {
        return round(
            ($this->quality +
                $this->accuracy +
                $this->communication +
                $this->cost +
                $this->compliance +
                $this->timeliness +
                $this->support) /
                7,
            1,
        );
    }
}
