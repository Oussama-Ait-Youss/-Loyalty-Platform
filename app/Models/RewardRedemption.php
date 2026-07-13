<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['client_id', 'reward_id', 'points_used', 'redeemed_at', 'status'])]
class RewardRedemption extends Model
{
    use HasFactory;

    protected $casts = [
        'redeemed_at' => 'datetime',
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function reward(): BelongsTo
    {
        return $this->belongsTo(RewardCatalog::class, 'reward_id');
    }
}
