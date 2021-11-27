@extends('layouts.main')

@section('title', 'Категории')

@section('top')
	@include('layouts.top')
@endsection

@section('content')

<!-- Start Content -->
<div class="container py-5">
	<div class="row">

		<div class="col-lg-3">
			<h1 class="h2 pb-4"><b>Все товары</b></h1>
			<ul class="list-unstyled templatemo-accordion">
				<li class="pb-3">
					<a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
						Категории
						<i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
					</a>
					<ul class="collapse show list-unstyled pl-3">

                        @foreach ($categories as $category)
						    <li><a class="text-decoration-none" href="/{{ $category->code }}">{{ $category->name }}</a></li>
                        @endforeach

					</ul>
				</li>
				<li class="pb-3">
					<a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
						Sale
						<i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
					</a>
					<ul id="collapseTwo" class="collapse list-unstyled pl-3">
						<li><a class="text-decoration-none" href="#">Sport</a></li>
						<li><a class="text-decoration-none" href="#">Luxury</a></li>
					</ul>
				</li>
				<li class="pb-3">
					<a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
						Product
						<i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
					</a>
					<ul id="collapseThree" class="collapse list-unstyled pl-3">
						<li><a class="text-decoration-none" href="#">Bag</a></li>
						<li><a class="text-decoration-none" href="#">Sweather</a></li>
						<li><a class="text-decoration-none" href="#">Sunglass</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="col-lg-9">
			<div class="row">
				<p>Здесь представлены все категории товаров</p>
			</div>

			{{-- Вывод товаров --}}
			<div class="row">
			@foreach($products as $product)
				@include('card', ['product' => $product])
			@endforeach
			</div>
			{{-- Конец вывода товаров --}}

			<div div="row">
				<ul class="pagination pagination-lg justify-content-end">
					<li class="page-item disabled">
						<a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
					</li>
					<li class="page-item">
						<a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
					</li>
					<li class="page-item">
						<a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>
<!-- End Content -->

<!-- Start Brands -->
<section class="bg-light py-5">
	<div class="container my-4">
		<div class="row text-center py-3">
			<div class="col-lg-6 m-auto">
				<h1 class="h1">Our Brands</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					Lorem ipsum dolor sit amet.
				</p>
			</div>
			<div class="col-lg-9 m-auto tempaltemo-carousel">
				<div class="row d-flex flex-row">
					<!--Controls-->
					<div class="col-1 align-self-center">
						<a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">
							<i class="text-light fas fa-chevron-left"></i>
						</a>
					</div>
					<!--End Controls-->

					<!--Carousel Wrapper-->
					<div class="col">
						<div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel">
							<!--Slides-->
							<div class="carousel-inner product-links-wap" role="listbox">

								<!--First slide-->
								<div class="carousel-item active">
									<div class="row">
										<div class="col-3 p-md-5">
											<a href="#"><img class="img-fluid brand-img" src="img/brand_01.png" alt="Brand Logo"></a>
										</div>
										<div class="col-3 p-md-5">
											<a href="#"><img class="img-fluid brand-img" src="img/brand_02.png" alt="Brand Logo"></a>
										</div>
										<div class="col-3 p-md-5">
											<a href="#"><img class="img-fluid brand-img" src="img/brand_03.png" alt="Brand Logo"></a>
										</div>
										<div class="col-3 p-md-5">
											<a href="#"><img class="img-fluid brand-img" src="img/brand_04.png" alt="Brand Logo"></a>
										</div>
									</div>
								</div>
								<!--End First slide-->

								<!--Second slide-->
								<div class="carousel-item">
									<div class="row">
										<div class="col-3 p-md-5">
											<a href="#"><img class="img-fluid brand-img" src="img/brand_01.png" alt="Brand Logo"></a>
										</div>
										<div class="col-3 p-md-5">
											<a href="#"><img class="img-fluid brand-img" src="img/brand_02.png" alt="Brand Logo"></a>
										</div>
										<div class="col-3 p-md-5">
											<a href="#"><img class="img-fluid brand-img" src="img/brand_03.png" alt="Brand Logo"></a>
										</div>
										<div class="col-3 p-md-5">
											<a href="#"><img class="img-fluid brand-img" src="img/brand_04.png" alt="Brand Logo"></a>
										</div>
									</div>
								</div>
								<!--End Second slide-->

								<!--Third slide-->
								<div class="carousel-item">
									<div class="row">
										<div class="col-3 p-md-5">
											<a href="#"><img class="img-fluid brand-img" src="img/brand_01.png" alt="Brand Logo"></a>
										</div>
										<div class="col-3 p-md-5">
											<a href="#"><img class="img-fluid brand-img" src="img/brand_02.png" alt="Brand Logo"></a>
										</div>
										<div class="col-3 p-md-5">
											<a href="#"><img class="img-fluid brand-img" src="img/brand_03.png" alt="Brand Logo"></a>
										</div>
										<div class="col-3 p-md-5">
											<a href="#"><img class="img-fluid brand-img" src="img/brand_04.png" alt="Brand Logo"></a>
										</div>
									</div>
								</div>
								<!--End Third slide-->

							</div>
							<!--End Slides-->
						</div>
					</div>
					<!--End Carousel Wrapper-->

					<!--Controls-->
					<div class="col-1 align-self-center">
						<a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">
							<i class="text-light fas fa-chevron-right"></i>
						</a>
					</div>
					<!--End Controls-->
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Brands-->

@endsection

@section('footer')
	@include('layouts.footer')
@endsection