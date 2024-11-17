<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = [
            [
                'title' => 'Discover the Beauty of Prag',
                'date' => '15 November 2024 ',
                'image' => 'assets/images/blog/b1.jpg',
                'description' => 'Discover the beautiful weather, fantastic foods, and historical places in Prag.',
                'url' => '#',
            ],
            [
                'title' => 'Explore India’s Hidden Gems',
                'date' => '20 November 2017',
                'image' => 'assets/images/blog/b2.jpg',
                'description' => 'Find out about India’s historical places, delicious cuisines, and mesmerizing landscapes.',
                'url' => '#',
            ],
            [
                'title' => '10 Natural Wonders to Discover',
                'date' => '25 November 2017',
                'image' => 'assets/images/blog/b3.jpg',
                'description' => 'Explore some of the most natural and breathtaking places around the world.',
                'url' => '#',
            ],
            [
                'title' => '10 Natural Wonders to Discover',
                'date' => '25 November 2017',
                'image' => 'assets/images/blog/b3.jpg',
                'description' => 'Explore some of the most natural and breathtaking places around the world.',
                'url' => '#',
            ],
            [
                'title' => '10 Natural Wonders to Discover',
                'date' => '25 November 2017',
                'image' => 'assets/images/blog/b3.jpg',
                'description' => 'Explore some of the most natural and breathtaking places around the world.',
                'url' => '#',
            ],
            [
                'title' => '10 Natural Wonders to Discover',
                'date' => '25 November 2017',
                'image' => 'assets/images/blog/b3.jpg',
                'description' => 'Explore some of the most natural and breathtaking places around the world.',
                'url' => '#',
            ],
            
        ];

        // Asegúrate de que la vista sea 'index'
        return view('index', compact('articles'));
    }
}
