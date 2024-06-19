@extends('layouts.app')

@section('title', 'Список статей')

@section('content')
    <h1>Список статей</h1>
    <a href="{{ route('articles.create') }}">Добавить статью</a>
    @if (Session::has('success'))
        <div>{{ Session::get('success') }}</div>
    @endif
    @foreach ($articles as $article)
        <h2><a href="{{ route('articles.show', [$article]) }}">{{ $article->name }}</a></h2>
        <p><a href="{{ route('articles.edit', [$article]) }}">Редактировать</a></p>
        <p><a href="{{ route('articles.destroy', [$article]) }}" data-method="delete" rel="nofollow">Удалить</a></p>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection