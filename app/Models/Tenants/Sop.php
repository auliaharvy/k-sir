<?php

namespace App\Models\Tenants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sop extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'version',
        'created_by',
    ];

    public function details(): HasMany
    {
        return $this->hasMany(SopDetail::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
