@extends("frontend/layout")
@section("main")
    <!-- Breadcrumb Section Begin -->
    <div class="container" >
        <div class="breadcrumb-text" style="margin: 20px 0 50px;">
            <a href="{{url("/")}}"><i class="fa fa-home"></i> Home</a>
            <span>New Product</span>
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
                                            <a href="{{url("product-detail",["id"=>$product->id])}}">
                                                <img src="{{$product->getImage()}}" alt="">
                                            </a>
                                            @if($product->sale > 0)
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
                                            <a href="{{url("product-detail",["id"=>$product->id])}}">
                                                <h5>{{$product->name}}</h5>
                                            </a>
{{--                                            @if($product->sale > 0)--}}
{{--                                                <div class="product-price" style="text-decoration: line-through">--}}
{{--                                                    {{ number_format($product->sale) }}--}}
{{--                                                </div>--}}
{{--                                            @endif--}}

                                            @if($product->sale > 0)
                                            <div class="product-price">
                                                <span style="text-decoration: line-through;font-size: 20px;font-weight: 700;">{{ number_format($product->sale) }}??</span>
                                                &emsp;<span style="text-decoration: none;color: #e7ab3c;font-size: 20px; font-weight: 700;">{{number_format($product->price)}}??</span>
                                            </div>
                                            @else
                                                <div class="product-price">
                                                    {{number_format($product->price)}}??
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div>
                            {!! $products->links("vendor.pagination.default") !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

@endsection
