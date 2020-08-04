<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function showCategories()
    {
        return view('news.categories', ['news' => self::getNewsDbData()]);
    }

    public function showAllFromCategory($category)
    {
        return view('news.all-from-category', ['news' => self::getNewsDbData(), 'currentCategory' => $category]);
    }

    public function showDetail($category, $id)
    {
        return view('news.detail', ['news' => self::getNewsDbData(), 'currentCategory' => $category, 'id' => $id]);
    }
}
