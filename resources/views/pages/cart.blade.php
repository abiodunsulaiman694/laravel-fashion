@extends('layouts.master')

@section('title')
About us
@endsection

@section('banner')
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
            <div class="col-first">
                <h1>Cart</h1>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="container">
    <div class="cart-title">
        <div class="row">
            <div class="col-md-6">
                <h6 class="ml-15">Product</h6>
            </div>
            <div class="col-md-2">
                <h6>Price</h6>
            </div>
            <div class="col-md-2">
                <h6>Quantity</h6>
            </div>
            <div class="col-md-2">
                <h6>Total</h6>
            </div>
        </div>
    </div>
    <div class="cart-single-item">
        <div class="row align-items-center">
            <div class="col-md-6 col-12">
                <div class="product-item d-flex align-items-center">
                    <img src="img/ci1.jpg" class="img-fluid" alt="">
                    <h6>Pixelstore fresh Blackberry</h6>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="price">$360.00</div>
            </div>
            <div class="col-md-2 col-6">
                <div class="quantity-container d-flex align-items-center mt-15">
                    <input type="text" class="quantity-amount" value="1" />
                    <div class="arrow-btn d-inline-flex flex-column">
                        <button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
                        <button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-12">
                <div class="total">$720.00</div>
            </div>
        </div>
    </div>
    <div class="cart-single-item">
        <div class="row align-items-center">
            <div class="col-md-6 col-12">
                <div class="product-item d-flex align-items-center">
                    <img src="img/ci2.jpg" class="img-fluid" alt="">
                    <h6>Pixelstore fresh Blackberry</h6>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="price">$360.00</div>
            </div>
            <div class="col-md-2 col-6">
                <div class="quantity-container d-flex align-items-center mt-15">
                    <input type="text" class="quantity-amount" value="1" />
                    <div class="arrow-btn d-inline-flex flex-column">
                        <button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
                        <button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-12">
                <div class="total">$720.00</div>
            </div>
        </div>
    </div>
    <div class="cart-single-item">
        <div class="row align-items-center">
            <div class="col-md-6 col-12">
                <div class="product-item d-flex align-items-center">
                    <img src="img/ci3.jpg" class="img-fluid" alt="">
                    <h6>Pixelstore fresh Blackberry</h6>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="price">$360.00</div>
            </div>
            <div class="col-md-2 col-6">
                <div class="quantity-container d-flex align-items-center mt-15">
                    <input type="text" class="quantity-amount" value="1" />
                    <div class="arrow-btn d-inline-flex flex-column">
                        <button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
                        <button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-12">
                <div class="total">$720.00</div>
            </div>
        </div>
    </div>
    <div class="cupon-area d-flex align-items-center justify-content-between flex-wrap">
        <a href="#" class="view-btn color-2"><span>Update Cart</span></a>
        <div class="cuppon-wrap d-flex align-items-center flex-wrap">
            <div class="cupon-code">
                <input type="text">
                <button class="view-btn color-2"><span>Apply</span></button>
            </div>
            <a href="#" class="view-btn color-2 have-btn"><span>Have a Coupon?</span></a>
        </div>
    </div>
    <div class="subtotal-area d-flex align-items-center justify-content-end">
        <div class="title text-uppercase">Subtotal</div>
        <div class="subtotal">$2160.00</div>
    </div>
    <div class="shipping-area d-flex justify-content-end">
        <div class="tile text-uppercase">Shipping</div>
        <form action="#" class="d-inline-flex flex-column align-items-end">
            <ul class="d-flex flex-column align-items-end">
                <li class="filter-list">
                    <label for="flat-rate">Flat Rate:<span>$5.00</span></label>
                    <input class="pixel-radio" type="radio" id="flat-rate" name="brand">
                </li>
                <li class="filter-list">
                    <label for="free-shipping">Free Shipping</label>
                    <input class="pixel-radio" type="radio" id="free-shipping" name="brand">
                </li>
                <li class="filter-list">
                    <label for="flat-rate-2">Flat Rate:<span>$10.00</span></label>
                    <input class="pixel-radio" type="radio" id="flat-rate-2" name="brand">
                </li>
                <li class="filter-list">
                    <label for="local-delivery">Local Delivery:<span>$2.00</span></label>
                    <input class="pixel-radio" type="radio" id="local-delivery" name="brand">
                </li>
                <li class="calculate">Calculate Shipping</li>
            </ul>
            <div class="sorting">
                <select>
                    <option value="1">Bangladesh</option>
                    <option value="1">India</option>
                    <option value="1">Srilanka</option>
                </select>
            </div>
            <div class="sorting mt-20">
                <select>
                    <option value="1">Select a State</option>
                    <option value="1">Select a State</option>
                    <option value="1">Select a State</option>
                </select>
            </div>
            <input type="text" placeholder="Postcode/Zipcode" onfocus="this.placeholder=''" onblur="this.placeholder = 'Postcode/Zipcode'" required class="common-input mt-10">
            <button class="view-btn color-2 mt-10"><span>Update Details</span></button>
        </form>

    </div>
</div>
@endsection