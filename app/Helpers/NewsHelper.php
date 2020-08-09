<?php


namespace App\Helpers;


class NewsHelper
{
    public static function translateCategory($category)
    {
        $categoryDictionary = [
            'sport' => 'Спорт',
            'travel' => 'Путешествия',
            'films' => 'Фильмы',
            'technology' => 'Технологии',
            'science' => 'Наука',
        ];

        return $categoryDictionary[$category];
    }
}
