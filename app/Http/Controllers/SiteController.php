<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SiteController extends Controller
{
    public function index() {
        return view('welcome', [
            'posts' => Post::simplePaginate(10)
        ]);
    }
}
