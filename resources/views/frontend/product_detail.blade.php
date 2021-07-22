@extends("frontend.layout")
@section("main")
    <div class = "container card-wrapper">
        <div class="container" >
            <div class="breadcrumb-text">
                <a href="{{url("/")}}" style="font-size: 17px"><i class="fa fa-home"></i> Home</a>
                <span style="font-size: 17px" >Product Detail</span>
            </div>
        </div>
        <div class = "card-detail">
            <!-- card left -->
            @foreach($p as $product)
            <div class = "product-imgs col-md-6">
                <div class = "img-display">
                    <div class = "img-showcase">
                        <img src = "{{$product->getImage()}}" alt = "shoe image">
                    </div>
                </div>
            </div>
            <!-- card right -->
            <div class = "product-content col-md-6">
                <h2 class = "product-title">{{$product->name}}</h2>
                <div class = "product-price">
                    @if($product->sale > 0)
                        <p class = "last-price">Old Price: <span>{{number_format($product->sale)}} đ</span></p>
                        <p class = "new-price">New Price: <span>{{number_format($product->price)}} đ</span></p>
                    @else
                        <p class = "new-price"> Price: <span>{{number_format($product->price)}} đ</span></p>
                    @endif
                </div>

                <div class = "product-detail">
                    <h2>Basic information</h2>
                    <p>{{$product->description}}</p>
                    <ul>
                        <li>Category: <span>{{$product->category->name}}</span></li>
                    </ul>
                </div>

                <div class = "purchase-info">
                    <button type = "button" class = "btn">
                        <a href="{{url("products/add-to-cart",["id"=>$product->id])}}" style="color: black">
                        Add to Cart <i class = "fas fa-shopping-cart"></i></a>
                    </button>
                </div>

                <div class = "social-links">
                    <p>Share At: </p>
                    <a href = "#">
                        <i class = "fab fa-facebook-f"></i>
                    </a>
                    <a href = "#">
                        <i class = "fab fa-twitter"></i>
                    </a>
                    <a href = "#">
                        <i class = "fab fa-instagram"></i>
                    </a>
                    <a href = "#">
                        <i class = "fab fa-whatsapp"></i>
                    </a>
                    <a href = "#">
                        <i class = "fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="pd-wrap ">
        <div class="container">
            <div class="product-info-tabs border-1">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item_2">
                        <a class="nav-link active " id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item_2">
                        <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Comments</a>
                    </li>
                </ul>
                @foreach($p as $product)
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active in" id="description" role="tabpanel" aria-labelledby="description-tab">
                        {{$product->description}}
                    </div>
                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <form class="review-form" action="{{url("product-detail",["id"=>$product->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Your comment</label>
                                <textarea name="content" class="form-control" rows="5"></textarea>
                            </div>
                            <button class="round-black-btn">Submit Review</button>
                        </form>
                        <div class="comment-comment">
                        @foreach($comments as $comment)
                            <div class="comment-1">
                                <img src="{{asset("img/defaul/defaul.jpg")}}" style="width: 50px;float:left;margin-right: 15px" />
                                <span>{{$comment->user->name}}</span>
                                <span>{{$comment->created_at}}</span>
                                <span></span>
                                <p>{{$comment->content}}</p>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom: 50px">
        <div class="row">
            <div class="col-lg-12">
                <h2 style="text-align: center;margin: 50px 0">Sale Products</h2>
            </div>
        </div>
        <div class="col-lg-12 order-1 order-lg-2">
            <div class="product-list border-s">
                <div class="row">
                    @foreach($p1 as $product)
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <a href="{{url("product-detail",["id"=>$product->id])}}"> <img src="{{$product->getImage()}}" alt=""></a>

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
                                    @if($product->sale > 0)
                                        <div class="product-price">
                                            <span style="text-decoration: line-through;font-size: 20px;font-weight: 700;">{{ number_format($product->sale) }}đ</span>
                                            &emsp;<span style="text-decoration: none;color: #e7ab3c;font-size: 20px; font-weight: 700;">{{number_format($product->price)}}đ</span>
                                        </div>
                                    @else
                                        <div class="product-price">
                                            {{number_format($product->price)}}đ
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
