@extends('main.header-footer')
@section('main_content')
<section class="page-content-wrapper">
    <div class="page-content">
        <section for="notice">
            <div class="card radius-15 bg-primary text-light">
                <div class="card-body " style="position: relative;">
                    @php
                        $notification=session('notification');
                    @endphp
                    
                </div>
            </div>
        </section>
        <section for="order-status">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="card radius-15 bg-primary">
                        <div class="card-body">
                            <div class="media align-items-center text-center">
                                <div class="media-body">
                                    <h4 class="mb-0 font-weight-bold text-white">0</h4>
                                    <p class="mb-0 text-white">Orders Placed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card radius-15 bg-success">
                        <div class="card-body">
                            <div class="media align-items-center text-center">
                                <div class="media-body">
                                    <h4 class="mb-0 font-weight-bold text-white">
                                        @if(isset($orderCnt['Delivered']))
                                            {{$orderCnt['Delivered']}}
                                        @else
                                            0
                                        @endif
                                    </h4>
                                    <p class="mb-0 text-white">Orders Delivered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card radius-15 bg-info">
                        <div class="card-body">
                            <div class="media align-items-center text-center">
                                <div class="media-body">
                                    <h4 class="mb-0 font-weight-bold text-white">
                                        @if(isset($orderCnt['Processing']))
                                            {{$orderCnt['Processing']}}
                                        @else
                                            0
                                        @endif
                                    </h4>
                                    <p class="mb-0 text-white">Processing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card radius-15 bg-warning">
                        <div class="card-body">
                            <div class="media align-items-center text-center">
                                <div class="media-body">
                                    <h4 class="mb-0 font-weight-bold text-white">
                                        @if(isset($orderCnt['Pending']))
                                            {{$orderCnt['Pending']}}
                                        @else
                                            0
                                        @endif
                                    </h4>
                                    <p class="mb-0 text-white">Pending</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section for="stock-status">
            <div class="row">
                <div class="col-12 col-lg-4 text-center">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <h4 class="mb-0 font-weight-bold">
                                        @if(isset($product['total_upload']))
                                            {{$product['total_upload']}}
                                        @else
                                            0
                                        @endif
                                    </h4>
                                    <p class="mb-0">Total Uploaded Product</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <h4 class="mb-0 font-weight-bold">
                                        @if(isset($product['active']))
                                            {{$product['active']}}
                                        @else
                                            0
                                        @endif
                                    </h4>
                                    <p class="mb-0">Total Approved Product</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <h4 class="mb-0 font-weight-bold">
                                        @if(isset($product['enlist']))
                                            {{$product['enlist']}}
                                        @else
                                            0
                                        @endif
                                    </h4>
                                    <p class="mb-0">Total Active Product</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section for="ammount-status">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="media align-items-center text-primary">
                                <div class="media-body">
                                    <p class="mb-0">Total Order Ammount</p>
                                    <h4 class="mb-0 font-weight-bold text-left">
                                        @if(isset($orderAmt['Orders']))
                                            {{$orderAmt['Orders']}}
                                        @else
                                            0
                                        @endif
                                         /-
                                    </h4>
                                </div>
                                <div class="mt-4">
                                    <h1>৳</h1>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="media align-items-center text-success">
                                <div class="media-body">
                                    <p class="mb-0">Total Deliverd Ammount</p>
                                    <h4 class="mb-0 font-weight-bold text-left"> 
                                    @if(isset($orderAmt['Delivered']))
                                        {{$orderAmt['Delivered']}}
                                    @else
                                        0
                                    @endif
                                    /-
                                </h4>
                                </div>
                                <div class="mt-4">
                                    <h1>৳</h1>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="media align-items-center text-info">
                                <div class="media-body">
                                    <p class="mb-0">Total Processing</p>
                                    <h4 class="mb-0 font-weight-bold text-left">
                                        @if(isset($orderAmt['Processing']))
                                            {{$orderAmt['Processing']}}
                                        @else
                                            0
                                        @endif
                                        /-
                                    </h4>
                                </div>
                                <div class="mt-4">
                                    <h1>৳</h1>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="media align-items-center text-danger">
                                <div class="media-body">
                                    <p class="mb-0">Payable to Amardokan</p>
                                    <h4 class="mb-0 font-weight-bold text-left">
                                        @if(isset($orderAmt['payable']))
                                            {{$orderAmt['payable']}}
                                        @else
                                            0
                                        @endif
                                        /-
                                    </h4>
                                </div>
                                <div class="mt-4">
                                    <h1>৳</h1>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection