<x-app-layout>
    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    </x-slot>

    {{---------------------
            $slot
        --------------------}}

    <section class="hero">
        <div class="hero-inner">
            <h1 class="m-0">Autologix Solution</h1>
            <h2>Discover The Future of SUVs with Autologix</h2>
            <a class="d-b" href="{{ route('shop') }}">Shop Now</a>
        </div>
    </section>
    <section class="featured-products _container">
        <h2 style="font-family: 'Roboto', sans-serif;">Featured Products</h2>
        <div class="home-grid">
            @each('components.product', $products, 'product')
        </div>
        <a href="{{ route('shop') }}" class="cta">View more products</a>
    </section>
    <section class="categories _container">
        <h2 style="font-family: 'Roboto', sans-serif;">Product Categories</h2>
        <div class="home-grid">
            @each('components.category', $categories, 'cate')
        </div>
    </section>

    {{---------------------
            $slot
        --------------------}}
</x-app-layout>
