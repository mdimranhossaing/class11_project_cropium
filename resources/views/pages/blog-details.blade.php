@extends('layouts.main')

@section('title', $title)

@section('contents')

    <!-- Breadcrumb Area Starts -->
    @include('components.breadcrumb-area')

    <!-- Blog Details Area Starts -->
    @include('components.blog.blog-details-area')

@endsection