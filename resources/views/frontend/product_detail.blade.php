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
            <div class = "product-imgs col-md-6">
                <div class = "img-display">
                    <div class = "img-showcase">
                        <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg" alt = "shoe image">
                        <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg" alt = "shoe image">
                        <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg" alt = "shoe image">
                        <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg" alt = "shoe image">
                    </div>
                </div>
                <div class = "img-select">
                    <div class = "img-item">
                        <a href = "#" data-id = "1">
                            <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg" alt = "shoe image">
                        </a>
                    </div>
                    <div class = "img-item">
                        <a href = "#" data-id = "2">
                            <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg" alt = "shoe image">
                        </a>
                    </div>
                    <div class = "img-item">
                        <a href = "#" data-id = "3">
                            <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg" alt = "shoe image">
                        </a>
                    </div>
                    <div class = "img-item">
                        <a href = "#" data-id = "4">
                            <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg" alt = "shoe image">
                        </a>
                    </div>
                </div>
            </div>
            <!-- card right -->
            <div class = "product-content col-md-6">
                <h2 class = "product-title">nike shoes</h2>
                <a href = "#" class = "product-link">visit nike store</a>
                <div class = "product-rating">
                    <i class = "fas fa-star"></i>
                    <i class = "fas fa-star"></i>
                    <i class = "fas fa-star"></i>
                    <i class = "fas fa-star"></i>
                    <i class = "fas fa-star-half-alt"></i>
                    <span>4.7(21)</span>
                </div>

                <div class = "product-price">
                    <p class = "last-price">Old Price: <span>$257.00</span></p>
                    <p class = "new-price">New Price: <span>$249.00 (5%)</span></p>
                </div>

                <div class = "product-detail">
                    <h2>about this item: </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>
                    <ul>
                        <li>Color: <span>Black</span></li>
                        <li>Available: <span>in stock</span></li>
                        <li>Category: <span>Shoes</span></li>
                        <li>Shipping Area: <span>All over the world</span></li>
                        <li>Shipping Fee: <span>Free</span></li>
                    </ul>
                </div>

                <div class = "purchase-info">
                    <input type = "number" min = "0" value = "1">
                    <button type = "button" class = "btn">
                        Add to Cart <i class = "fas fa-shopping-cart"></i>
                    </button>
                    <button type = "button" class = "btn">Compare</button>
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
        </div>
    </div>
    <div class="pd-wrap">
        <div class="container">
            <div class="product-info-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item_2">
                        <a class="nav-link active " id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item_2">
                        <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (0)</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active in" id="description" role="tabpanel" aria-labelledby="description-tab">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                    </div>
                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <div class="review-heading">REVIEWS</div>
                        <p class="mb-20" style="color: #777777">There are no reviews yet.</p>
                        <form class="review-form">
                            <div class="form-group">
                                <label>Your rating</label>
                                <div class="reviews-counter">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Your message</label>
                                <textarea class="form-control" rows="10"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="" class="form-control" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="" class="form-control" placeholder="Email Id*">
                                    </div>
                                </div>
                            </div>
                            <button class="round-black-btn">Submit Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom: 50px">
        <div class="row">
            <div class="col-lg-12">
                <h2 style="text-align: center;margin: 50px 0">New Products</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="http://127.0.0.1:8000/upload/1626275702.jpg" alt="">
                        <div class="sale pp-sale">Sale</div>
                        <ul>
                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                            <li class="quick-view"><a href="http://127.0.0.1:8000/products/add-to-cart/1">+ Add Cart</a></li>
                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="catagory-name">Dio</div>
                        <a href="#">
                            <h5>Áo thun gọn</h5>
                        </a>
                        <div class="product-price">
                            10,000
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="http://127.0.0.1:8000/upload/1626275702.jpg" alt="">
                        <div class="sale pp-sale">Sale</div>
                        <ul>
                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                            <li class="quick-view"><a href="http://127.0.0.1:8000/products/add-to-cart/1">+ Add Cart</a></li>
                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="catagory-name">Dio</div>
                        <a href="#">
                            <h5>Áo thun gọn</h5>
                        </a>
                        <div class="product-price">
                            10,000
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="http://127.0.0.1:8000/upload/1626275702.jpg" alt="">
                        <div class="sale pp-sale">Sale</div>
                        <ul>
                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                            <li class="quick-view"><a href="http://127.0.0.1:8000/products/add-to-cart/1">+ Add Cart</a></li>
                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="catagory-name">Dio</div>
                        <a href="#">
                            <h5>Áo thun gọn</h5>
                        </a>
                        <div class="product-price">
                            10,000
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
