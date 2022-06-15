<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;
use Illuminate\Support\Str;

class EnglishController extends Controller
{
  public function home()
  {
      return view('en.home');
  }
  public function about_me()
  {
      return view('en.about_me');
  }
  public function online_counselling()
  {
      return view('en.online_counselling');
  }
  public function sitemap()
  {
    $posts = WinkPost::with('tags')
        ->live()
        ->orderBy('publish_date', 'DESC')
        ->get();
      return view('en.sitemap', ['posts' => $posts]);
  }
  public function search(Request $request){
    $search = $request->input('search');
    $posts = WinkPost::with('tags')
        ->live()
        ->where('title', 'LIKE', "%{$search}%")
        ->orWhere('body', 'LIKE', "%{$search}%")
        ->get();
    return view('en.search', compact('posts'));
}
  public function en_additional_info()
  {
      return view('en.additional_info');
  }
  public function courses()
  {
      return view('en.courses');
  }
  public function apps()
  {
      return view('en.apps');
  }
  public function contact()
  {
      return view('en.contact');
  }
  public function en_disclaimer()
  {
      return view('en.disclaimer');
  }
  public function policy()
  {
      return view('en.policy');
  }
  public function en_magazine()
  {
    $posts = WinkPost::with('tags')
        ->live()
        ->orderBy('publish_date', 'DESC')
        ->paginate(5);
        return view('en.magazine', [
        'posts' => $posts,
        ]);
  }
  public function en_psychology()
  {
    $posts = WinkPost::with('tags')
        ->live()
        ->orderBy('publish_date', 'DESC')
        ->where('category', "Psychology")
        ->paginate(5);
        return view('en.psychology', [
        'posts' => $posts,
        ]);
  }
  public function en_self_improvement()
  {
    $posts = WinkPost::with('tags')
        ->live()
        ->orderBy('publish_date', 'DESC')
        ->where('category', "Self-Improvement")
        ->paginate(5);
        return view('en.self_improvement', [
        'posts' => $posts,
        ]);
  }
  public function en_mental_health()
  {
    $posts = WinkPost::with('tags')
        ->live()
        ->orderBy('publish_date', 'DESC')
        ->where('category', "Mental Health A-Z")
        ->paginate(5);
        return view('en.mental_health', [
        'posts' => $posts,
        ]);
  }
}
