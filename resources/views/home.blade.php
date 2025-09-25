@extends('layouts.app')
@section('title', 'Welcome')
@section('content')

@include('partials.hero-section')
@include('partials.categories')
@include('partials.smart-section')
@include('partials.testimonials')
@include('partials.blog-section')
@include('partials.newsletter')
@include('partials.faqs')

@endsection