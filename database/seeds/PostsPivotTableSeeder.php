<?php

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Database\Seeder;

class PostsPivotTableSeeder extends Seeder
{

    public function run()
    {
        $posts = Post::get();
        $countCategories = Category::count();
        foreach($posts as $post){
            $numCategories = rand(1, $countCategories);
            $categories = Category::all()->random($numCategories);
            foreach($categories as $category){
                $post->categories()->attach($category);
            }
        }
        $tags = Tag::get();
        $countPosts = Post::count();
        foreach($tags as $tag){
            $numPosts = rand(1, $countPosts);
            $posts = Post::all()->random($numPosts);
            foreach($posts as $post){
                $tag->posts()->attach($post);
            }
        }
    }
}

/*
 * BelongsTo = associate()
 * ManyToMany = attach()
 *
 */