@extends('frontend.layouts.master')

@section('main-content')
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Trang chủ<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="javascript:void(0);">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Contact -->
<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="contact-head">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="form-main">
                        <div class="title">
                            @php
                            $settings=DB::table('settings')->get();
                            @endphp
                            <h4>Liên hệ với chúng tôi</h4>
                            <h3>Gửi tin nhắn hô trợ @auth @else<span style="font-size:12px;" class="text-danger">[Bạn
                                    cần đăng nhập trước đã]</span>@endauth</h3>
                        </div>
                        <form class="form-contact form contact_form" method="post" action="{{route('contact.store')}}"
                            id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Tên của bạn<span>*</span></label>
                                        <input name="name" id="name" type="text" placeholder="Nhập tên của bạn">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Chủ đề <span>*</span></label>
                                        <input name="subject" type="text" id="subject" placeholder="Nhập chủ đề">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Email của bạn<span>*</span></label>
                                        <input name="email" type="email" id="email" placeholder="Nhập Email của bạn">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Số điện thoại<span>*</span></label>
                                        <input id="phone" name="phone" type="number" placeholder="Nhấp SĐT của bạn">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group message">
                                        <label>Tin nhắn<span>*</span></label>
                                        <textarea name="message" id="message" cols="30" rows="9"
                                            placeholder="Nhập tin nhắn"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group button">
                                        <button type="submit" class="btn ">Gửi tin nhắn</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="single-head">
                        <div class="single-info">
                            <i class="fa fa-phone"></i>
                            <h4 class="title">Liên hệ với chúng tôi:</h4>
                            <ul>

                                <li>+034 808 7203</li>
                            </ul>
                        </div>
                        <div class="single-info">
                            <i class="fa fa-envelope-open"></i>
                            <h4 class="title">Email:</h4>
                            <ul>
                                <li>pdung0162@gmail.com</li>
                            </ul>
                        </div>
                        <div class="single-info">
                            <i class="fa fa-location-arrow"></i>
                            <h4 class="title">Địa chỉ:</h4>
                            <ul>
                                <li>Yên Nghĩa, Hà Đông, Hà Nội</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Contact -->

<!-- Map Section -->
<div class="map-section">
    <div id="myMap">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21077.98836272649!2d105.73406270725314!3d20.94861433936815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313452efff394ce3%3A0x391a39d4325be464!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBQaGVuaWthYQ!5e0!3m2!1svi!2s!4v1718801197349!5m2!1svi!2s"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!--/ End Map Section -->

<!-- Start Shop Newsletter  -->
@include('frontend.layouts.newsletter')
<!-- End Shop Newsletter -->
<!--================Contact Success  =================-->
<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-success">Cảm ơn bạn!</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-success">Ti nhắn được gửi thành công!</p>
            </div>
        </div>
    </div>
</div>

<!-- Modals error -->
<div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-warning">Sorry!</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-warning">Đã có lỗi xảy ra. Hãy thử lại.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.modal-dialog .modal-content .modal-header {
    position: initial;
    padding: 10px 20px;
    border-bottom: 1px solid #e9ecef;
}

.modal-dialog .modal-content .modal-body {
    height: 100px;
    padding: 10px 20px;
}

.modal-dialog .modal-content {
    width: 50%;
    border-radius: 0;
    margin: auto;
}
</style>
@endpush
@push('scripts')
<script src="{{ asset('frontend/js/jquery.form.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/js/contact.js') }}"></script>
@endpush