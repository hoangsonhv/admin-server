@extends("frontend/layout")
@section("main")
    <!-- Breadcrumb Section Begin -->
    @if($products->isNotEmpty())
        <div class="container" >
            <div class="breadcrumb-text" style="margin: 20px 0 50px;">
                <a href=""><i class="ti-search"></i> Search</a>
                <span>Find {{count($products)}} product</span>
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
                                            <sdiv class="pi-text">
                                                <div class="catagory-name">{{$product->category->name}}</div>
                                                <a href="#">
                                                    <h5>{{$product->name}}</h5>
                                                </a>
                                                <div class="product-price">
                                                    {{ number_format($product->price) }}
                                                </div>
                                            </sdiv>
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
    @else
        <div>
            <h2>Not value found</h2>
        </div>
    @endif


@endsection
