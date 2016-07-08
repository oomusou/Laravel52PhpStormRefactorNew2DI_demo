<?php

namespace App\Repositories;

use App\Post;
use Illuminate\Database\Eloquent\Collection;

class PostRepository
{

    /**
     * @return Collection
     */
    public function getLatest3Posts()
    {
        return Post::orderBy('id', 'desc')
            ->take(3)
            ->get();
    }
}