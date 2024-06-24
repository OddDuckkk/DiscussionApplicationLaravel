@extends('layout.layout')

@section('content')
    @include('component.header')
    @include('component.message')
    @include('posts.index')
@endsection
