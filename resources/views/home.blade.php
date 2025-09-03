@extends('layouts.master')

@section('content')

    <!-- Hero Section -->
    @include('pages.Hero')
    <!-- End Hero Section -->

    <!-- About Section -->
    @include('pages.About')
    <!-- End About Section -->

    <!-- Education Section -->
    @include('pages.Education')
    <!-- End Education Section -->

    <!-- Skills Section -->
    @include('pages.skills')
    <!-- End Skills Section -->

    <!-- Projects Section -->
    @include('pages.Projects')
    <!-- End Projects Section -->

    <!-- Experience Section -->
    @include('pages.Experience')
    <!-- End Experience Section -->

    <!-- Testimonials Section -->
    @include('pages.Testimonials')
    <!-- End Testimonials Section -->

    <!-- Contact Section -->
    @include('pages.Contact')
    <!-- End Contact Section -->

@endsection
