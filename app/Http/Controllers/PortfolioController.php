<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        $posts= Portfolio::all();

        return view('portfolio', compact('posts'));
    }

    public function admin() {
        $post = Portfolio::find(1);
        dd($post);

        return 'This is portfolio page from controller';
    }

    public function create() {
        $portfolioArr = [
            [
                'title' => 'Portfolio Title',
                'description' => 'Some description of portfolio',
                'image' => 'image.lpg',
                'link' => 'htttp://example.link',
                'is_published' => 1,
            ],
            
        ];

        foreach ($portfolioArr as $item) {
            Portfolio::create($item);
        }

        dd('created');
    }

    public function update() {
        $post = Portfolio::find(1);

        $post->update([
            'title' => 'updated',
                'description' => 'updated',
                'image' => 'updated',
                'link' => 1000,
                'is_published' => 0,
        ]);
        
        dd($post->title);
    }

    public function delete() { 
        $post = Portfolio::find(2);
        $post->delete();

        dd('Deleted');
    }

    public function firstOrCreate() {

    $anotherPost = [
                'title' => 'Portfolio Title',
                'description' => 'updated 2',
                'image' => 'image.jpg',
                'link' => 1000000,
                'is_published' => 0,
    ];

    $post = Portfolio::firstOrCreate([
        'title'=> 'Portfolio Title',
    ],
        $anotherPost);

        dump($post->description);

        dd('finished');
    
    }

    public function updateOrCreate() {
        $anotherPost = [
                'title' => 'Portfolio Title update 2',
                'description' => 'updated 2',
                'image' => 'image.jpg',
                'link' => 1000000,
                'is_published' => 0,
    ];

    $post = Portfolio::updateOrCreate([
        'title'=> 'Portfolio Title',
    ],
        $anotherPost);

        dump($post->description);

        dd('finished');
    }
}
