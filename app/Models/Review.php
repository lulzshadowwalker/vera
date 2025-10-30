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
        'country',
        'cost',
        'speed',
        'communication',
        'reliability',
        'quality',
        'support',
        'flexibility',
        'innovation',
        'value',
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
            'speed' => 'integer',
            'communication' => 'integer',
            'reliability' => 'integer',
            'quality' => 'integer',
            'support' => 'integer',
            'flexibility' => 'integer',
            'innovation' => 'integer',
            'value' => 'integer',
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
}
