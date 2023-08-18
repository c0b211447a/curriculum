<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:200:600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
            Show
        </x-slot>
        <body>
            <h1 class="title">
                {{ $post->title }}
            </h1>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            <div class="content">
                <div class="content_post">
                    <h3>本文</h3>
                    <p>{{ $post->body }}</p>
                </div>
            </div>
            <div class="edit"><a href="/posts/{{ $post->id }}/edit">edit</a></div>
            <div class="back">
                <a href="/">back</a>
            </div>
        </body>
    </x-app-layout>
</html>
