@extends('user.layout.app')
@section('title','Home | Limupa Store')
@section('content')

<!-- Begin Slider With Category Menu Area -->
    @include('user.home_compo.slider')
<!-- Slider With Category Menu Area End Here -->

<!-- Begin Li's Static Banner Area -->
    @include('user.home_compo.static_banner')
<!-- Li's Static Banner Area End Here -->

<!-- Begin Li's Hot deal Product Area -->
    @include('user.home_compo.hot_deal')
<!-- Li's Hot deal Product Area End Here -->

<!-- Begin Li's Laptops Product | Home V2 Area -->
    @include('user.home_compo.home_category_product')
<!-- Li's Laptops Product | Home V2 Area End Here -->

<!-- Begin Li's Trending Product | Home V2 Area -->
    @include('user.home_compo.feature')
<!-- Li's Trending Product | Home V2 Area End Here -->

@endsection
