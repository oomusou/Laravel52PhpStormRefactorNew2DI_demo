<?php

use App\Post;
use App\Services\PostService;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PostServiceTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function 顯示最新3筆文章()
    {
        /** arrange */
        factory(Post::class, 100)->create();

        /** act */
        $actual = App::make(PostService::class)
            ->showLatest3Posts()
            ->pluck('id')
            ->all();

        /** assert */
        $expected = [100, 99, 98];
        $this->assertEquals($expected, $actual);
    }
}
