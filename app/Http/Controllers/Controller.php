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
            'films' => self::getNewsByCategory('/resources/news/films'),
            'travel' => self::getNewsByCategory('/resources/news/travel'),
            'science' => self::getNewsByCategory('/resources/news/science'),
            'technology' => self::getNewsByCategory('/resources/news/tech'),
            'sport' => self::getNewsByCategory('/resources/news/sport'),
        ];
    }

    private static function getNewsByCategory($categoryPathInProject)
    {
        $path = $_SERVER['DOCUMENT_ROOT'] . '/..' . $categoryPathInProject;
        $categoryFiles = scandir($path);
        $categoryFiles = array_filter($categoryFiles, function ($el) {
            return !is_dir($el);
        });

        foreach ($categoryFiles as $categoryFile) {
            $category[] = file_get_contents($path . '/' . $categoryFile);
        }

        return $category;
    }
}
