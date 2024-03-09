<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'completed'
    ];

    public function todo(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
