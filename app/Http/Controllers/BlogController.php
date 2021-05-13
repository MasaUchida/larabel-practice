<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * ブログ一覧表示
     *
     * @return view
     */
    public function showList(){
        return view('blog.list');
    }
}
