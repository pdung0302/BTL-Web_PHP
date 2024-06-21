@extends('frontend.layouts.master')
@section('title','Cart Page')
@section('main-content')
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{('home')}}">Trang chủ<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="">Giỏ hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Shopping Cart -->
<div class="shopping-cart section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Shopping Summery -->
                <table class="table shopping-summery">
                    <thead>
                        <tr class="main-hading">
                            <th>Sản phẩm</th>
                            <th>Tên</th>
                            <th class="text-center">Đơn giá</th>
                            <th class="text-center">Số lượng</th>
                            <th class="text-center">Tổng cộng</th>
                            <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                        </tr>
                    </thead>
                    <tbody id="cart_item_list">
                        <form action="{{route('cart.update')}}" method="POST">
                            @csrf
                            @if(Helper::getAllProductFromCart())
                            @foreach(Helper::getAllProductFromCart() as $key=>$cart)
                            <tr>
                                @php
                                $photo=explode(',',$cart->product['photo']);
                                @endphp
                                <td class="image" data-title="No"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></td>
                                <td class="product-des" data-title="Description">
                                    <p class="product-name"><a href="{{route('product-detail',$cart->product['slug'])}}"
                                            target="_blank">{{$cart->product['title']}}</a></p>
                                    <p class="product-des">{!!($cart['summary']) !!}</p>
                                </td>
                                @php
                                $exchange_rate = 23000;
                                $amount_vnd = $cart['amount'] * $exchange_rate;
                                @endphp
                                <td class="price" data-title="Price"><span>{{number_format($amount_vnd,0)}} VND</span>
                                </td>
                                <td class="qty" data-title="Qty">
                                    <!-- Input Order -->
                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" class="btn btn-primary btn-number" disabled="disabled"
                                                data-type="minus" data-field="quant[{{$key}}]">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" name="quant[{{$key}}]" class="input-number" data-min="1"
                                            data-max="100" value="{{$cart->quantity}}">
                                        <input type="hidden" name="qty_id[]" value="{{$cart->id}}">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-primary btn-number" data-type="plus"
                                                data-field="quant[{{$key}}]">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/ End Input Order -->
                                </td>

                                @php
                                $exchange_rate = 23000;
                                $price_vnd = $cart['price'] * $exchange_rate;
                                @endphp
                                <td class="total-amount cart_single_price" data-title="Total"><span
                                        class="money">{{number_format($price_vnd, 0)}} VND</span></td>

                                <td class="action" data-title="Remove"><a href="{{route('cart-delete',$cart->id)}}"><i
                                            class="ti-trash remove-icon"></i></a></td>
                            </tr>
                            @endforeach
                            <track>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="float-right">
                                <button class="btn float-right" type="submit">Cập nhật</button>
                            </td>
                            </track>
                            @else
                            <tr>
                                <td class="text-center">
                                    Không có gì trong giỏ hàng cả 🥲 <a href="{{route('product-grids')}}"
                                        style="color:blue;">Hãy mua hàng đi</a>

                                </td>
                            </tr>
                            @endif

                        </form>
                    </tbody>
                </table>
                <!--/ End Shopping Summery -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Total Amount -->
                <div class="total-amount">
                    <div class="row">
                        <div class="col-lg-8 col-md-5 col-12">
                            <div class="left">
                                <div class="coupon">
                                    <form action="{{route('coupon-store')}}" method="POST">
                                        @csrf
                                        <input name="code" placeholder="Enter Valid Coupon">
                                        <button class="btn">Áp dụng mã giảm giá</button>
                                    </form>
                                </div>
                                {{-- <div class="checkbox">`
										@php
											$shipping=DB::table('shippings')->where('status','active')->limit(1)->get();
										@endphp
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox" onchange="showMe('shipping');"> Shipping</label>
									</div> --}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7 col-12">
                            <div class="right">
                                @php
                                $exchange_rate = 23000; // Replace with the current exchange rate
                                $total_cart_price_vnd = Helper::totalCartPrice() * $exchange_rate;
                                $coupon_value_vnd = session()->has('coupon') ? Session::get('coupon')['value'] *
                                $exchange_rate : 0;
                                $total_amount_vnd = $total_cart_price_vnd - $coupon_value_vnd;
                                @endphp
                                <ul>
                                    <li class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">Giá
                                        gốc<span>{{number_format($total_cart_price_vnd,0)}} VND</span></li>

                                    @if(session()->has('coupon'))
                                    <li class="coupon_price" data-price="{{Session::get('coupon')['value']}}">Giảm
                                        giá<span>{{number_format($coupon_value_vnd,0)}} VND</span></li>
                                    @endif
                                    <!-- @php
                                    $total_amount=Helper::totalCartPrice();
                                    if(session()->has('coupon')){
                                    $total_amount=$total_amount-Session::get('coupon')['value'];
                                    }
                                    @endphp -->
                                    @if(session()->has('coupon'))
                                    <li class="last" id="order_total_price">Giá
                                        tiền<span>{{number_format($total_amount_vnd,0)}} VND</span></li>
                                    @else
                                    <li class="last" id="order_total_price">Giá
                                        tiền<span>{{number_format($total_amount_vnd,0)}} VND</span></li>
                                    @endif
                                </ul>
                                <div class="button5">
                                    <a href="{{route('checkout')}}" class="btn">Thanh toán</a>
                                    <a href="{{route('product-grids')}}" class="btn">Tiếp tục mua sắm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Total Amount -->
            </div>
        </div>
    </div>
</div>
<!--/ End Shopping Cart -->

<!-- Start Shop Services Area  -->
<section class="shop-services section">
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
                    <p>Giá cả hợp lí</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->

<!-- Start Shop Newsletter  -->
@include('frontend.layouts.newsletter')
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
$(document).ready(function() {
    $('.shipping select[name=shipping]').change(function() {
        let cost = parseFloat($(this).find('option:selected').data('price')) || 0;
        let subtotal = parseFloat($('.order_subtotal').data('price'));
        let coupon = parseFloat($('.coupon_price').data('price')) || 0;
        // alert(coupon);
        $('#order_total_price span').text('$' + (subtotal + cost - coupon).toFixed(2));
    });

});
</script>

@endpush
