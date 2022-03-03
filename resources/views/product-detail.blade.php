@extends('layout')
@section('Contact')
 
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="inner-content">
                        <h2>{{$tttruyen->TENTRUYEN}}</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="left-images">
                    <img src="assets/images/anhtruyen/{{$tttruyen->ANHTRUYEN}}" alt="" style="width:200px">
                    <!-- <img src="assets/images/single-product-02.jpg" alt=""> -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4>{{$tttruyen->TENTRUYEN}}</h4>
                    <span class="price">{{$tttruyen->VIEW}}</span>
                    <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span class="price">Tác giả: {{$tttruyen->TACGIA}}</span>
                    <span class="price">Tình trạng: {{$tttruyen->TINHTRANG}}</span>
                    <span class="price">Theo dõi: {{$tttruyen->LUOTTHEODOI}}</span>
                    <span>Nội dung</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i><p>{{$tttruyen->GIOITHIEU}}.</p>
                    </div>
                    <div class="quantity-content">
                        <div class="left-content">
                            <h6>Số chap: </h6>
                        </div>
                        <div class="right-content">
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="{{$tttruyen->SOCHAPTER}}" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <h4>Đoc</h4>
                        <div class="main-border-button"><a href="#">Đọc truyện</a></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
@endsection
