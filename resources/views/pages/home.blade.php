@extends('layouts.main')

@section('title', 'Homepage')

@section('contents')

    <!-- Hero Area Starts -->
    @include('components.home.hero-area')

    <!-- About Area Starts -->
    @include('components.home.about-area')

    <!-- Feature Area Starts -->
    @include('components.home.feature-area')

    <!-- Experience & Skills Area Starts -->
    @include('components.home.experience&skills-area')

    <!-- Portfolio Area Starts -->
    @include('components.home.portfolio-area')

    <!-- Client Area Starts -->
    @include('components.home.client-area')

    <!-- CounterUP Area Starts -->
    @include('components.home.counter-up-area')

    <!-- Award Area Starts -->
    @include('components.home.award-area')

    <!-- Social Link Area Starts -->
    @include('components.home.social-link-area')

@endsection
