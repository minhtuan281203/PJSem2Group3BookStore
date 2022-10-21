@extends('front.layout.master')

@section('title', 'List Product')

@section('body')
	<div class="hero page-inner overlay" style="background-image: url('front/img/hero_bg_1.jpg');">

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up">Products</h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item "><a href="./">Home</a></li>
							<li class="breadcrumb-item active text-white-50" aria-current="page">Products</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="section section-properties">
		<div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="filter-sidebar">
                        <div class="filter-widget">
                            <h4 class="fw-title"><a href="/shop">Categories</a> </h4>
                            <ul class="filter-catagories">
                                @foreach($categories as $category)
                                <li><a href="shop/{{$category->name}}">{{$category->name}}</a></li>@endforeach
                            </ul>
                        </div>
                        <form action="">
                            <div class="filter-widget">
                                <h4 class="fw-title">Author</h4>
                                <div class="fw-brand-check">
                                        @foreach($authors as $author)
                                            <div class="bc-item">
                                                <label for="bc-author{{$author->id}}">
                                                    {{$author->name}}
                                                    <input
                                                        type="radio"
                                                        id="bc-author{{$author->id}}"
                                                        value="{{$author->id}}"
                                                        name="author"
                                                        onclick="this.form.submit()"
                                                        {{request('author')==$author->id ? 'checked' : ''}}
                                                    >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        @endforeach
                                </div>
                            </div>

                            <div class="filter-widget">
                                <h4 class="fw-title">Price</h4>
                                    <div class="filter-range-wrap">
                                        <div class="range-slider">
                                            <div class="price-input" style="display:flex; gap: 12px;">
                                                <div>
                                                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Min Price</label>
                                                    <input name="price_min" min="0" max="100" value="{{request('price_min')??0}}" type="number" id="first_name" class="price-from bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required>
                                                </div>
                                                <span style="transform: translateY(30px);">_</span>
                                                <div>
                                                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Max Price</label>
                                                    <input name="price_max" min="0"  max="100" value="{{request('price_max')??100}}" type="number" id="last_name" class="price-to bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="100" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max ="98">
                                            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                        </div>
                                    </div>
                                    <button class="filter-btn">Filter</button>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="property-item mb-30">
                                    {{--them div co class box--}}
                                    <div class="box">
                                        <a href="product/{{ $product->id }}" class="img">
                                            <img src="front/img/products/{{ $product->productImages[0]->path }}" alt="Image" class="img-fluid-2">
                                        </a>
                                    </div>

                                    <div class="property-content">
                                        <div class="property-price">
                                            <div class="price mb-2"><span>${{$product->price}}</span></div>

                                        </div>

                                        <div>
                                            <span class="city d-block mb-3">{{ $product->name }}</span>
                                            <span class="d-block mb-2 text-black-50"> {{ $product->author->name}} </span>

                                            <div class="btn-pro">
                                                <a href="product/{{ $product->id }}" class="btn btn-primary py-2 px-3">See Details</a>
                                                <a href="cart/add/{{ $product->id }}" class="btn btn-primary py-2 px-3">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- .item -->
                            </div>
                        @endforeach
                        <div class="row align-items-center py-5">
                            {!! $products->links() !!}
                        </div>
                    </div>
                </div>
            </div>


		</div>
	</div>
    <script>
        let min=document.querySelector('.price-from')
        let max=document.querySelector('.price-to')
        max.min = min.value -''+1;
        min.max = max.value - 1
        min.addEventListener('change',function (){
            max.min = min.value -''+1;
        })
        max.addEventListener('change',function (){
            min.max = max.value-1;
        })
    </script>
@endsection
