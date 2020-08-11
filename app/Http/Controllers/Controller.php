<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function getNewsDbData(): array
    {
        return [
            'films' => self::getNewsByCategory('films'),
            'travel' => self::getNewsByCategory('travel'),
            'science' => self::getNewsByCategory('science'),
            'technology' => self::getNewsByCategory('tech'),
            'sport' => self::getNewsByCategory('sport'),
        ];
    }

    private static function getNewsByCategory($category)
    {
        $path = $_SERVER['DOCUMENT_ROOT'] . '/../resources/news/' . $category;
        $categoryFiles = scandir($path);
        $categoryFiles = array_filter($categoryFiles, function ($el) {
            return !is_dir($el);
        });

        foreach ($categoryFiles as $categoryFile) {
            $categoryNews[] = file_get_contents($path . '/' . $categoryFile);
        }

        return $categoryNews;
    }
}
