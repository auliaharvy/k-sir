<?php

namespace App\Models\Tenants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SopDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'sop_id',
        'step',
        'content',
        'image',
    ];

    public function sop(): BelongsTo
    {
        return $this->belongsTo(Sop::class);
    }
}
