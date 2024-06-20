@extends('frontend.layouts.master')

@section('title','Checkout page')

@section('main-content')

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Trang chủ<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">Thanh toán</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Checkout -->
<section class="shop checkout section">
    <div class="container">
        <form class="form" method="POST" action="{{route('cart.order')}}">
            @csrf
            <div class="row">

                <div class="col-lg-8 col-12">
                    <div class="checkout-form">
                        <h2>Hoàn thành thanh toán của bạn</h2>
                        <p>Chỉ còn một chút nữa thôi! Hãy kiên nhẫn</p>
                        <!-- Form -->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Họ <span>*</span></label>
                                    <input type="text" name="first_name" placeholder="" value="{{old('first_name')}}"
                                        value="{{old('first_name')}}" required>
                                    @error('first_name')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Tên<span>*</span></label>
                                    <input type="text" name="last_name" placeholder="" value="{{old('lat_name')}}"
                                        required>
                                    @error('last_name')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Địa chỉ email <span>*</span></label>
                                    <input type="email" name="email" placeholder="" value="{{old('email')}}" required>
                                    @error('email')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Số điện thoại<span>*</span></label>
                                    <input type="number" name="phone" placeholder="" required value="{{old('phone')}}">
                                    @error('phone')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Tỉnh thành<span>*</span></label>
                                    <select name="country" id="country" required>
                                        <option value="AN">An Giang</option>
                                        <option value="BV">Bà Rịa - Vũng Tàu</option>
                                        <option value="BL">Bạc Liêu</option>
                                        <option value="BK">Bắc Kạn</option>
                                        <option value="BG">Bắc Giang</option>
                                        <option value="BN">Bắc Ninh</option>
                                        <option value="BT">Bến Tre</option>
                                        <option value="BD">Bình Dương</option>
                                        <option value="BP">Bình Phước</option>
                                        <option value="BTH">Bình Thuận</option>
                                        <option value="BID">Bình Định</option>
                                        <option value="BR">Bình Dương</option>
                                        <option value="CB">Cà Mau</option>
                                        <option value="CN">Cần Thơ</option>
                                        <option value="CM">Cao Bằng</option>
                                        <option value="DA">Đà Nẵng</option>
                                        <option value="DL">Đắk Lắk</option>
                                        <option value="DK">Đắk Nông</option>
                                        <option value="DD">Điện Biên</option>
                                        <option value="DN">Đồng Nai</option>
                                        <option value="DT">Đồng Tháp</option>
                                        <option value="GL">Gia Lai</option>
                                        <option value="HG">Hà Giang</option>
                                        <option value="HN">Hà Nội</option>
                                        <option value="HT">Hà Tĩnh</option>
                                        <option value="HD">Hải Dương</option>
                                        <option value="HP">Hải Phòng</option>
                                        <option value="HU">Hậu Giang</option>
                                        <option value="HB">Hòa Bình</option>
                                        <option value="HY">Hưng Yên</option>
                                        <option value="KH">Khánh Hòa</option>
                                        <option value="KG">Kiên Giang</option>
                                        <option value="KT">Kon Tum</option>
                                        <option value="LC">Lai Châu</option>
                                        <option value="LD">Lâm Đồng</option>
                                        <option value="LS">Lạng Sơn</option>
                                        <option value="LA">Lào Cai</option>
                                        <option value="LAI">Long An</option>
                                        <option value="ND">Nam Định</option>
                                        <option value="NA">Nghệ An</option>
                                        <option value="NB">Ninh Bình</option>
                                        <option value="NT">Ninh Thuận</option>
                                        <option value="PT">Phú Thọ</option>
                                        <option value="PY">Phú Yên</option>
                                        <option value="QB">Quảng Bình</option>
                                        <option value="QNA">Quảng Nam</option>
                                        <option value="QNI">Quảng Ninh</option>
                                        <option value="QNG">Quảng Ngãi</option>
                                        <option value="QT">Quảng Trị</option>
                                        <option value="ST">Sóc Trăng</option>
                                        <option value="SL">Sơn La</option>
                                        <option value="TH">Tây Ninh</option>
                                        <option value="TB">Thái Bình</option>
                                        <option value="TN">Thái Nguyên</option>
                                        <option value="THH">Thanh Hóa</option>
                                        <option value="TTH">Thừa Thiên Huế</option>
                                        <option value="TG">Tiền Giang</option>
                                        <option value="TV">Trà Vinh</option>
                                        <option value="TQ">Tuyên Quang</option>
                                        <option value="VL">Vĩnh Long</option>
                                        <option value="VP">Vĩnh Phúc</option>
                                        <option value="YB">Yên Bái</option>
                                        <option value="HCM">Hồ Chí Minh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Địa chỉ 1<span>*</span></label>
                                    <input type="text" name="address1" placeholder="" value="{{old('address1')}}">
                                    @error('address1')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Địa chỉ 2</label>
                                    <input type="text" name="address2" placeholder="" value="{{old('address2')}}">
                                    @error('address2')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Mã bưu điện</label>
                                    <input type="text" name="post_code" placeholder="" value="{{old('post_code')}}">
                                    @error('post_code')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <!--/ End Form -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="order-details">
                        <!-- Order Widget -->
                        <div class="single-widget">
                            <h2>Giá tiền</h2>
                            <div class="content">
                                <ul>
                                    @php
                                    $exchangeRate = 23000;
                                    $totalCartPriceUSD = Helper::totalCartPrice();
                                    $totalCartPriceVND = $totalCartPriceUSD * $exchangeRate;
                                    @endphp

                                    <li class="order_subtotal" data-price="{{ $totalCartPriceVND }}">Giá tiền
                                        <span>{{ number_format($totalCartPriceVND, 0, ',', '.') }} VND</span>
                                    </li>>
                                    <li class="shipping">
                                        Phí vận chuyển
                                        @if(count(Helper::shipping())>0 && Helper::cartCount()>0)
                                        @php
                                        $exchange_rate = 23000; // Replace with the current exchange rate
                                        @endphp
                                        <select name="shipping" class="nice-select" required>
                                            <option value="">Chọn địa chỉ của bạn</option>
                                            @foreach(Helper::shipping() as $shipping)
                                            @php
                                            $price_vnd = $shipping->price * $exchange_rate;
                                            @endphp
                                            <option value="{{$shipping->id}}" class="shippingOption"
                                                data-price="{{$price_vnd}}">
                                                {{$shipping->type}}: {{number_format($price_vnd, 0, '.', ',')}} VND
                                            </option>
                                            @endforeach
                                        </select>
                                        @else
                                        <span>Free</span>
                                        @endif
                                    </li>

                                    @if(session('coupon'))
                                    @php
                                    $usdValue = session('coupon')['value'];
                                    $exchangeRate = 23000;
                                    $vndValue = $usdValue * $exchangeRate;
                                    @endphp
                                    <li class="coupon_price" data-price="{{ $vndValue }}">Bạn tiết kiệm được
                                        <span>{{ number_format($vndValue, 0, ',', '.') }} VND</span>
                                    </li>
                                    @endif

                                    @php
                                    $total_amount_usd = Helper::totalCartPrice();
                                    $exchangeRate = 23000; // Replace with the current exchange rate

                                    // Khởi tạo giá trị giảm giá
                                    $discount_vnd = 0;

                                    if (session('coupon')) {
                                    $usdValue = session('coupon')['value'];
                                    $discount_vnd = $usdValue * $exchangeRate;
                                    }

                                    // Chuyển đổi tổng số tiền từ USD sang VND và trừ đi giá trị giảm giá
                                    $total_amount_vnd = ($total_amount_usd * $exchangeRate) - $discount_vnd;
                                    @endphp

                                    <li class="last" id="order_total_price">Tổng cộng
                                        <span>{{ number_format($total_amount_vnd, 0, ',', '.') }} VND</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--/ End Order Widget -->
                        <!-- Order Widget -->
                        <div class="single-widget">
                            <h2>Phương thức thanh toán</h2>
                            <div class="content">
                                <div class="checkbox">
                                    {{-- <label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Check Payments</label> --}}
                                    <form-group>
                                        <input name="payment_method" type="radio" value="cod" required> <label> Thanh
                                            toán khi nhận hàng</label><br>
                                        <!-- <input name="payment_method"  type="radio" value="paypal"> <label> PayPal</label><br> -->
                                        <input name="payment_method" type="radio" value="cardpay" required> <label>
                                            Thanh toán qua thẻ</label><br>

                                        <!-- Credit Card Details -->
                                        <div id="creditCardDetails" style="display: none;">
                                            <label for="cardNumber">Số thẻ:</label>
                                            <input type="text" id="cardNumber" name="card_number" maxlength="16"><br>

                                            <label for="cardName">Tên chủ thẻ:</label>
                                            <input type="text" id="cardName" name="card_name"><br>

                                            <label for="expirationDate">Ngày hết hạn:</label>
                                            <input type="text" id="expirationDate" name="expiration_date"
                                                maxlength="5"><br>

                                            <label for="cvv">CVV:</label>
                                            <input type="text" id="cvv" name="cvv" maxlength="3"><br>
                                        </div>
                                    </form-group>
                                </div>
                            </div>

                        </div>
                        <!--/ End Order Widget -->
                        <!-- Payment Method Widget -->
                        <div class="single-widget payement">
                            <div class="content">
                                <img src="{{('backend/img/payment-method.png')}}" alt="#">
                            </div>
                        </div>
                        <!--/ End Payment Method Widget -->
                        <!-- Button Widget -->
                        <div class="single-widget get-button">
                            <div class="content">
                                <div class="button">
                                    <button type="submit" class="btn">Tiến hành thanh toán</button>
                                </div>
                            </div>
                        </div>
                        <!--/ End Button Widget -->
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!--/ End Checkout -->

<!-- Start Shop Services Area  -->
<section class="shop-services section home">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-rocket"></i>
                    <h4>Free shiping</h4>
                    <p>Đơn hàng trên 100.000 VND</p>
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
                    <p>Bảo mật thanh toán 100%</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-tag"></i>
                    <h4>Best Peice</h4>
                    <p>Giá cả hơp lí</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!-- End Shop Services -->

<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>Tin tức</h4>
                        <p> Đăng kí ngay và nhận <span>10%</span> giảm giá trên đơn hàng đầu tiên của bạn</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Your email address" required="" type="email">
                            <button class="btn">Dăng kí</button>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->
@endsection
@push('styles')
<style>
li.shipping {
    display: inline-flex;
    width: 100%;
    font-size: 14px;
}

li.shipping .input-group-icon {
    width: 100%;
    margin-left: 10px;
}

.input-group-icon .icon {
    position: absolute;
    left: 20px;
    top: 0;
    line-height: 40px;
    z-index: 3;
}

.form-select {
    height: 30px;
    width: 100%;
}

.form-select .nice-select {
    border: none;
    border-radius: 0px;
    height: 40px;
    background: #f6f6f6 !important;
    padding-left: 45px;
    padding-right: 40px;
    width: 100%;
}

.list li {
    margin-bottom: 0 !important;
}

.list li:hover {
    background: #F7941D !important;
    color: white !important;
}

.form-select .nice-select::after {
    top: 14px;
}
</style>
@endpush
@push('scripts')
<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
<script>
$(document).ready(function() {
    $("select.select2").select2();
});
$('select.nice-select').niceSelect();
</script>
<script>
function showMe(box) {
    var checkbox = document.getElementById('shipping').style.display;
    // alert(checkbox);
    var vis = 'none';
    if (checkbox == "none") {
        vis = 'block';
    }
    if (checkbox == "block") {
        vis = "none";
    }
    document.getElementById(box).style.display = vis;
}
</script>
<script>
$(document).ready(function() {
    $('.shipping select[name=shipping]').change(function() {
        let cost = parseFloat($(this).find('option:selected').data('price')) || 0;
        let subtotal = parseFloat($('.order_subtotal').data('price'));
        let coupon = parseFloat($('.coupon_price').data('price')) || 0;
        // alert(coupon);
        $('#order_total_price span').text((subtotal + cost - coupon).toFixed(2) + 'VND');
    });

});
</script>

<script>
$(document).ready(function() {
    $('input[name="payment_method"]').change(function() {
        if ($(this).val() === 'cardpay') {
            $('#creditCardDetails').show();
        } else {
            $('#creditCardDetails').hide();
        }
    });
});
</script>

@endpush