@extends('website.master')

@section('title')
    Checkout Page
@endsection

@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">checkout</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="index.html">Shop</a></li>
                        <li>checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="checkout-steps-form-style-1">
                        <ul class="nav nav-pills">
                            <li><a href="" class="nav-link active" data-bs-target="#cash" data-bs-toggle="pill">Cash
                                    On
                                    delivery</a></li>
                            <li><a href="" class="nav-link" data-bs-target="#online" data-bs-toggle="pill">Online</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="cash">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-form form-default">
                                            <label>Full Name</label>
                                            <div class="col-md-12 form-input form">
                                                <input type="text" required name="name" placeholder="Full Name">
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form form-default">
                                            <label>Email Address</label>
                                            <div class="form-input form">
                                                <input type="email" required name="email" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form form-default">
                                            <label>Phone Number</label>
                                            <div class="form-input form">
                                                <input type="number" required name="mobile" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form form-default">
                                            <label>Delivery Address</label>
                                            <div class="form-input form">
                                                <textarea placeholder="Order Delivery Address" name="delivery_address"></textarea>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="col-md-12">
                                        <div class="single-checkbox checkbox-style-3">
                                            <input type="checkbox" id="checkbox-3" checked>
                                            <label for="checkbox-3"><span></span></label>
                                            <p>I accept all terms & condition.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form button">
                                            <button type="submit" class="btn">Confirm Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="online">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout-sidebar">

                        <div class="checkout-sidebar-price-table ">
                            <h5 class="title">Shopping Cart Summery</h5>
                            <div class="sub-total-price">
                                @foreach (ShoppingCart::all() as $item)
                                    <div class="total-price">
                                        <p class="value">
                                            {{ $item->name }}
                                            ({{ $item->price }} * {{ $item->qty }})
                                        </p>
                                        <p class="price">${{ $item->price * $item->qty }}</p>
                                    </div>
                                @endforeach
                            </div>
                            <div class="total-payable">
                                <div class="payable-price">
                                    <p class="value">Subotal Price:</p>
                                    <p class="price">$164.50</p>
                                </div>
                            </div>
                            <div class="price-table-btn button">
                                <a href="javascript:void(0)" class="btn btn-alt">Checkout</a>
                            </div>
                        </div>
                        <div class="checkout-sidebar-banner mt-30">
                            <a href="product-grids.html">
                                <img src="{{ asset('/') }}website/assets/images/banner/banner.jpg" alt="#">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection