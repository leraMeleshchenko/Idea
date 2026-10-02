<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\IdeaStatus;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Idea extends Model
{
    /** @use HasFactory<\Database\Factories\IdeaFactory> */
    use HasFactory;

    protected $casts = [
      'links' => AsArrayObject::class,
      'status' => IdeaStatus::class,

    ];


    public function user(): BelongsTo{

        return $this->belongsTo(User::class);

    }
}
