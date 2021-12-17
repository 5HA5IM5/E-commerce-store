@extends('layouts.master')
@section('content')

    @include('components.slider')

    @include('components.categories')

    <div class="mb-4"></div>

    @include('components.add_col_3')

    <div class="mb-3"></div>

    @include('components.new_arrivals')

    <div class="mb-6"></div>

    @include('components.banner')

    @include('components.brand ')

    <div class="mb-5"></div>

    @include('components.recommendations')

    <div class="mb-4"></div>

    <div class="container">
        <hr class="mb-0">
    </div>

    @include('components.icon_box')

@endsection