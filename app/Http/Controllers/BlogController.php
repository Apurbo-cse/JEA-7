<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
class BlogController extends Controller
{
    public function blog()
    {
        $data['contacts'] = DB::table('contacts')->limit(1)->get();
        $data['pages'] = DB::table('pages')->limit(1)->get();
        $data['latest_news']=Post::where('status', 'active')->orderBy('id', 'desc')->limit(3)->get();
        $data['posts']=Post::where('status', 'active')->orderBy('id', 'desc')->paginate(5);
        $data['popular_posts']=Post::where('status', 'active')->orderBy('view_count', 'desc')->limit(3)->get();
        return view('frontend.blog.index',$data);
    }

    public function detailes($id){
        $data['pages'] = DB::table('pages')->limit(1)->get();
        $data['contacts'] = DB::table('contacts')->limit(1)->get();
        $data['latest_news']=Post::where('status', 'active')->orderBy('id', 'desc')->limit(3)->get();
        $data['popular_posts']=Post::where('status', 'active')->orderBy('view_count', 'desc')->limit(3)->get();
        $post=Post::findOrFail($id);
        $post->increment('view_count');
        $data['post']=$post;
        return view('frontend.blog.detailes', $data);
    }
}
