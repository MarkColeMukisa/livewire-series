<?php

namespace App\Models;

use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['title', 'content'])]
class Post extends Model
{
    /** @use HasFactory<PostFactory> */
    use HasFactory;
}
