@extends('frontend.layouts.master')

@section('title', 'Ecommerce Laravel || About Us')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Trang chủ<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Giới thiệu</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- About Us -->
	<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="about-content">
							@php
$settings = DB::table('settings')->get();
							@endphp
							<h3>Welcome To <span>SimpleDimple</span></h3>
							<p>Chào mừng bạn đến với SimpleDimple – nơi hội tụ của phong cách và sự tinh tế! Tại SimpleDimple, chúng tôi tin rằng thời
                            trang không chỉ là về trang phục, mà còn là cách thể hiện cá nhân, cá tính và gu thẩm mỹ độc đáo của mỗi người.
                            Sứ Mệnh Của Chúng Tôi
                            SimpleDimple được thành lập với sứ mệnh mang đến cho khách hàng những sản phẩm thời trang chất lượng cao, thiết kế hiện
                            đại, phù hợp với xu hướng toàn cầu. Chúng tôi luôn nỗ lực để mỗi bộ trang phục không chỉ đẹp mắt mà còn thoải mái và phù
                            hợp với nhiều hoàn cảnh.

                            Sản Phẩm Đa Dạng
                            Tại SimpleDimple, bạn sẽ tìm thấy một bộ sưu tập đa dạng từ trang phục công sở thanh lịch, quần áo dạo phố năng động đến
                            các bộ đầm dự tiệc sang trọng. Mỗi sản phẩm đều được chúng tôi chăm chút từ chất liệu, đường may đến kiểu dáng, nhằm
                            mang lại cho bạn trải nghiệm tốt nhất.

                            Dịch Vụ Chăm Sóc Khách Hàng
                            Chúng tôi tự hào với đội ngũ nhân viên nhiệt tình, chuyên nghiệp, luôn sẵn sàng tư vấn và hỗ trợ khách hàng.
                            SimpleDimple cam kết mang đến dịch vụ chăm sóc khách hàng chu đáo, nhanh chóng và thân thiện.

                            Cam Kết Về Chất Lượng
                            Chất lượng là ưu tiên hàng đầu tại SimpleDimple. Chúng tôi không ngừng nâng cao quy trình sản xuất và kiểm soát chất
                            lượng để đảm bảo mỗi sản phẩm đến tay khách hàng đều hoàn hảo nhất. Bạn hoàn toàn có thể yên tâm khi mua sắm tại
                            SimpleDimple.

                            Hãy Đến Và Trải Nghiệm
                            Hãy đến với SimpleDimple để trải nghiệm sự khác biệt trong phong cách thời trang. Chúng tôi tin rằng bạn sẽ tìm thấy cho
                            mình những bộ trang phục ưng ý và cảm nhận được sự tự tin, rạng rỡ mỗi ngày.

                            Cảm ơn bạn đã lựa chọn SimpleDimple. Chúng tôi rất hân hạnh được phục vụ bạn!
                        </p>
							<div class="button">
								<a href="{{route('blog')}}" class="btn">Blog</a>
								<a href="{{route('contact')}}" class="btn primary">Liên hệ</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="about-img overlay">
							<div class="button">
								<a href="https://www.youtube.com/watch?v=7edcgCdiHVU" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>
							<img src="@foreach($settings as $data) {{$data->photo}} @endforeach" alt="@foreach($settings as $data) {{$data->photo}} @endforeach">
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- End About Us -->


	<!-- Start Shop Services Area -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Với đơn hàng trên 100.000 VND</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Trong vòng 30 ngày</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>Bảo mật thanh toán 100% </p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Giá cả hợp lí</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->

	@include('frontend.layouts.newsletter')
@endsection
