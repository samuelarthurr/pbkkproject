<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Samuel Arthur', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Samuel Arthur Gamalliel',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum optio consequatur iusto perspiciatis accusamus eveniet quidem aperiam mollitia, repellendus deleniti doloremque cupiditate, totam provident recusandae id eum omnis ducimus molestiae!'

        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 1',
            'author' => 'Samuel Arthur Gamalliel',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos veniam rerum voluptatibus similique odio quis a ab maxime deleniti earum! Officiis exercitationem, praesentium sunt fuga quo ad blanditiis doloribus dolore!'

        ]
    ]]);
    $post = Arr::first()
});

Route::get('/posts/{id}', function ($id) {
    dd($id);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

