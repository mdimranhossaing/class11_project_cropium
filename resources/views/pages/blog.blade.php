@extends('layouts.main')

@section('title', $title)

@section('contents')

    <!-- Breadcrumb Area Starts -->
    @include('components.breadcrumb-area')

    <!-- Blog Area Starts -->
    @include('components.blog.blog-area')

@endsection