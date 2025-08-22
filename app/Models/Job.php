<?php

namespace App\Models;


class Job 
{
    public static function all()
    {
        return [
            ['title' => 'Job 1',
            'salary' => 100000,
            'description' => 'Job 1 description',],
            ['title' => 'Job 2',
            'salary' => 200000,
            'description' => 'Job 2 description',],
            ['title' => 'Job 3',
            'salary' => 300000,
            'description' => 'Job 3 description',],
        ];

    }
}
