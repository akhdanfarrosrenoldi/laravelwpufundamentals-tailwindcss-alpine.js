<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Akhdan Farros Renoldi', 'title' => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => "judul-artikel-1",
            'title' => 'Judul Artikel 1',
            'author' => 'Akhdan Farros Renoldi',
            'body' => 'Do culpa et id velit ipsum quis exercitation sint. Aute eiusmod ad magna cupidatat quis sunt sit mollit eu velit in magna eiusmod. Nisi cillum ea cillum pariatur minim dolor exercitation ad mollit. Voluptate est. ',
        ],

        [
            'id' => 2,
            'slug' => "judul-artikel-2",
            'title' => 'Judul Artikel 2',
            'author' => 'Akhdan Farros Renoldi',
            'body' => 'Amet qui adipisicing adipisicing excepteur quis officia id consectetur excepteur do. Amet id proident labore incididunt amet proident nisi. Proident incididunt Lorem sint quis deserunt deserunt amet quis commodo dolore incididunt voluptate id. Veniam fugiat ut elit ipsum mollit anim quis.'
        ],
    ]]);
});


Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => "judul-artikel-1",
            'title' => 'Judul Artikel 1',
            'author' => 'Akhdan Farros Renoldi',
            'body' => 'Do culpa et id velit ipsum quis exercitation sint. Aute eiusmod ad magna cupidatat quis sunt sit mollit eu velit in magna eiusmod. Nisi cillum ea cillum pariatur minim dolor exercitation ad mollit. Voluptate est. ',
        ],

        [
            'id' => 2,
            'slug' => "judul-artikel-2",
            'title' => 'Judul Artikel 2',
            'author' => 'Akhdan Farros Renoldi',
            'body' => 'Amet qui adipisicing adipisicing excepteur quis officia id consectetur excepteur do. Amet id proident labore incididunt amet proident nisi. Proident incididunt Lorem sint quis deserunt deserunt amet quis commodo dolore incididunt voluptate id. Veniam fugiat ut elit ipsum mollit anim quis.'
        ],
    ];
    // Find the post by ID
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
