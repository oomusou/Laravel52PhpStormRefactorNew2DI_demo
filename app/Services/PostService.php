<?php

namespace App\Services;

use App\Repositories\PostRepository;
use Illuminate\Database\Eloquent\Collection;

class PostService
{
    /**
     * @return Collection
     */
    public function showLatest3Posts()
    {
        $postRepository = new PostRepository();
        return $postRepository->getLatest3Posts();
    }
}