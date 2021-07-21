@extends("frontend/layout")
@section("main")
    @if(count($product_type) > 0)
        @foreach($cate as $ct)
            <div class="container" >
                <div class="breadcrumb-text" style="margin: 20px 0 50px;">
                    <h2>{{ $ct->name }} product</h2>
                </div>
            </div>
        @endforeach
        <section class="product-shop spad" >
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12 order-1 order-lg-2">
                        <div class="product-list border-s">
                            <div class="row ">
                                @foreach($product_type as $product)
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="pi-pic">
                                                <img src="{{$product->getImage()}}" alt="">
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
                            {{--                        <div>--}}
                            {{--                            {!! $product_type->links("vendor.pagination.default") !!}--}}
                            {{--                        </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <div class="container" style="height: 100px;margin-top: 50px">
            <h2>Not value product</h2>
        </div>
    @endif

@endsection
