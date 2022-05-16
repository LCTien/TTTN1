﻿@extends('layouts.layout')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/banner-1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Giỏ Hàng Của Tôi</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary bg-danger">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lstgiohang as $gh)
                            <tr class="text-center">
                                <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

                                <td class="image-prod"><div class="img" style="background-image:url('{{ asset("/images/$gh->hinh") }}');"></div></td>

                                <td class="product-name">
                                    <h3>@php echo $gh->ten_san_pham @endphp</h3>
                                    <p>@php
                                        $mo_ta = explode('.',$gh->mo_ta);
                                        echo $mo_ta[0] . '.';
                                    @endphp</p>
                                    {{-- <p>Hamburger là một loại thức ăn bao gồm bánh mì kẹp thịt xay (thường là thịt bò) ở giữa.</p> --}}
                                </td>

                                <td class="price" name="price" id="price @php echo $gh->id @endphp">@php echo $gh->gia @endphp</td>
                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input type="text" name="quantity" class="quantity" value="1" min="1" max="100" id="@php echo $gh->id @endphp" onclick="sum(@php echo $gh->id @endphp)">
                                    </div>
                                </td>
                                <td class="total" id="total @php echo $gh->id @endphp">@php echo $gh->gia*$gh->so_luong  @endphp</td>
                            </tr>
                            @endforeach
                            <!-- END TR-->
                            
                            {{-- <tr class="text-center">
                                <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

                                <td class="image-prod"><div class="img" style="background-image:url(images/6.jpg);"></div></td>

                                <td class="product-name">
                                    <h3>Gà Rán</h3>
                                    <p>Gà Rán là một món ăn xuất xứ từ miền Nam Hoa Kỳ; nguyên liệu chính là những miếng thịt gà đã được lăn bột rồi chiên trên chảo, chiên ngập dầu, chiên áp suất hoặc chiên chân không.</p>
                                </td>

                                <td class="price">$15.00</td>

                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                                    </div>
                                </td>

                                <td class="total">$15.70</td>
                            </tr><!-- END TR--> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Mã Giảm Giá</h3>
                    <p>Nhập vào đây mã giảm giá nếu có</p>
                    <form action="#" class="info">
                        <div class="form-group">
                            <label for="">Mã giảm giá</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                        </div>
                    </form>
                </div>
                <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Áp dụng phiếu giảm giá</a></p>
            </div>
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Ước tính phí vận chuyển và thuế</h3>
                    <p>Nhập điểm đến của bạn để nhận ước tính vận chuyển</p>
                    <form action="#" class="info">
                        <div class="form-group">
                            <label for="country">Quận/Huyện</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                        </div>
                    </form>
                </div>
                <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Ước tính</a></p>
            </div>
            
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Tổng tiền giỏ hàng</h3>
                    <p class="d-flex">
                        <span>Tổng phụ</span>
                        <span></span>
                        {{-- @foreach ($lstgiohang as $gh)
                            <span id="totalcheckout @php echo $gh->id @endphp">
                                @php 
                                    $all = 0;
                                    $all += (int)$gh->gia * (int)$gh->so_luong;
                                    echo $all;
                                @endphp
                            </span>
                        @endforeach --}}
                        
                    </p>
                    <p class="d-flex">
                        <span>Vận chuyển</span>
                        <span>$0.00</span>
                    </p>
                    <p class="d-flex">
                        <span>Hạ giá</span>
                        <span>$0.00</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Tổng tiền</span>
                        <span>$29.00</span>
                    </p>
                </div>
                <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Tiến hành kiểm tra</a></p>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    let total, totalcheckout;
    function sum(id){
        var quantity = document.getElementById(id);
        $(quantity).on('keyup',function(){
        var quantity = document.getElementById(id).value;
        var price = document.getElementById('price '+id).innerHTML;
        total = document.getElementById('total '+id);
        totalcheckout = document.getElementById('totalcheckout '+id);
        total.innerHTML = quantity * price;
        })
    }
</script>
@endsection