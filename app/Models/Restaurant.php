<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[Fillable(['manager_id', 'name', 'address', 'phone', 'email', 'logo', 'legal_document', 'status'])]
class Restaurant extends Model
{
    use HasFactory;

    public function manager(): BelongsTo
    {
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function loyaltySetting(): HasOne
    {
        return $this->hasOne(LoyaltySetting::class);
    }

    public function clientPoints(): HasMany
    {
        return $this->hasMany(ClientPoint::class);
    }

    public function visits(): HasMany
    {
        return $this->hasMany(Visit::class);
    }

    public function rewards(): HasMany
    {
        return $this->hasMany(RewardCatalog::class);
    }
}
