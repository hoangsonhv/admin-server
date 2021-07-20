@extends("frontend/layout")
@section("main")

    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel" style="height: 700px">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="carousel-caption">
                    <h2 style="color: red">Premium Leather Shoes</h2>
                </div>
            </div>
            <div class="item">
                <div class="carousel-caption">
                    <h2 style="color: red">High quality canvas shoes</h2>
                </div>
            </div>
            <div class="item">
                <div class="carousel-caption">
                    <h2 style="color: red">Genuine Caps</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 style="text-align: center;margin: 50px 0">New Products</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad" >
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-list border-s">
                        <div class="row ">
                            @foreach($products as $product)
                                <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="upload/{{$product->image}}" alt="">
                                        @if($product->sale == 1)
                                            <div class="sale pp-sale">Sale</div>
                                        @endif
                                        <ul>
                                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a  href="{{url("products/add-to-cart",["id"=>$product->id])}}">+ Add Cart</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">{{$product->category->name}}</div>
                                        <a href="#">
                                            <h5>{{$product->name}}</h5>
                                        </a>
                                        <div class="product-price">
                                            {{ number_format($product->price) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div>
                            {!! $products->links("vendor.pagination.default") !!}
                        </div>
                    </div>
{{--                    @if($products1 !=null)--}}
                    <div class="breacrumb-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 style="text-align: center;margin: 50px 0">Best Seller</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-list border-s">
                        <div class="row ">

                            @foreach($products1 as $product1)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="upload/{{$product1->image}}" alt="">
                                            <div class="sale pp-sale">Sale</div>
                                            <ul>
                                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                                <li class="quick-view"><a  href="{{url("products/add-to-cart",["id"=>$product1->id])}}">+ Add Cart</a></li>
                                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">{{$product1->category->name}}</div>
                                            <a href="#">
                                                <h5>{{$product1->name}}</h5>
                                            </a>
                                            <div class="product-price">
                                                {{ number_format($product1->price) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div>
                            {!! $products1->links("vendor.pagination.default") !!}
                        </div>
                    </div>
{{--                    @endif--}}
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

@endsection
