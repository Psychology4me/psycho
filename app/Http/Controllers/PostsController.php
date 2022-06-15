<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;
use Illuminate\Support\Str;

class PostsController extends Controller
{

  public function single($slug)
   {
       $post = WinkPost::live()->whereSlug($slug)->firstOrFail();
       $previous_s = WinkPost::with('tags')->live()->where('category', $post->category)->where('post_id', '<', $post->post_id)->max('slug');
       $next_s = WinkPost::with('tags')->live()->where('category', $post->category)->where('post_id', '>', $post->post_id)->min('slug');
       $previous_t = WinkPost::with('tags')->live()->where('category', $post->category)->where('post_id', '<', $post->post_id)->max('title');
       $next_t = WinkPost::with('tags')->live()->where('category', $post->category)->where('post_id', '>', $post->post_id)->min('title');
       $popular = WinkPost::with('tags')->live()->orderBy('publish_date', 'DESC')->paginate(5);
       $cout_psych = WinkPost::with('tags')->live()->where('category', 'Psychology')->count();
       $cout_mental = WinkPost::with('tags')->live()->where('category', 'Mental Health A-Z')->count();
       $cout_self = WinkPost::with('tags')->live()->where('category', 'Self-Improvement')->count();

       return view('posts.single', compact('post', 'previous_s', 'next_s', 'previous_t', 'next_t', 'popular', 'cout_psych', 'cout_mental', 'cout_self'));
   }
}
