<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function showCategories()
    {
        return view('news.categories', ['categories' => self::getNewsCategories()]);
    }

    public function showAllFromCategory($categoryId)
    {
        return view('news.all-from-category', ['news' => self::getNewsByCategory($categoryId), 'category' => self::getCategoryById($categoryId)]);
    }

    public function showDetail($category, $id)
    {
        return view('news.detail', ['item' => self::getNewsById($id), 'currentCategory' => $category]);
    }

    public function showAddForm()
    {
        return view('news.add');
    }

    public function add()
    {

    }

    //--------------- Model methods  -------------------------------------------------------------------------------
    public static function getAllNews() : Collection
    {
        return DB::table('news')->get();
    }

    public function getNewsCategories() : Collection
    {
        return DB::table('categories')->get();
    }

    private static function getNewsByCategory(int $categoryId) : Collection
    {
        return DB::table('news')->where('category_id', '=', $categoryId)->get();
    }

    private function getCategoryById(int $id) : Collection
    {
        return DB::table('categories')->where('id', '=', $id)->get();
    }

    public function getNewsById(int $id) : Collection
    {
        return DB::table('news')->where('id', '=', $id)->get();
    }
}
