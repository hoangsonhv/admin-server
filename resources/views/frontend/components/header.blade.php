<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-envelope"></i>
                    runnershop@gmail.com
                </div>
                <div class="phone-service">
                    <i class=" fa fa-phone"></i>
                    +84 66668888
                </div>
            </div>
            <div class="ht-right">
                @if (Auth::check())
                    <div class="lan-selector">
                        <div class="abc">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </div>
                    </div>
                    <div class="lan-selector">
                        <span style="padding: 0 15px">{{ Auth::user()->name }}</span>
                    </div>
                @else
                    <div class="lan-selector abc">
                        <a href="{{url("register")}}" style="padding: 0 10px" >Register</a>
                    </div>
                    <div class="lan-selector abc">
                        <a href="{{url("login")}}" style="padding: 0 10px"><i class="fa fa-user" style="margin-right: 5px"></i>Login</a>
                    </div>
                @endif
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-3 col-md-2" style="margin: -54px 0px;">
                    <div class="logo">
                        <a href="{{url("/")}}">
                            <img src="{{asset("upload/logo.png")}}" alt="" style="    width: 130px;">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="advanced-search">
                        <form action="{{url("search")}}" class="input-group" method="GET">
                            <input type="text" placeholder="Search" name="search">
                            <button type="button"><a href="{{url("search")}}" style="color: black"><i class="ti-search"></i></a></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-1 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="cart-icon">
                            <a href="#">
                                <i class="icon_bag_alt"></i>
                                @php $cart = session()->has("cart")?session()->get("cart"):[] @endphp
                                <span id="total-qty-show">{{count($cart)}}</span>
                            </a>
                            <div class="cart-hover">
                                <div id="change-item-cart">
                                    @if(session()->has("cart"))
                                        <div class="select-items">
                                            <table>
                                                <tbody>
                                                @php
                                                    $total = 0;
                                                @endphp
                                                @foreach($cart as $item )
                                                    @php
                                                        $total += $item['price'] * $item['cart_qty'];
                                                    @endphp
                                                    <tr>
                                                        <td class="si-pic"><img src="{{$item->getImage()}}" style="width: 72px;height: 72px"></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>{{number_format($item->price)}}₫ x {{$item->cart_qty}}</p>
                                                                <h6>{{$item['name']}}</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <a href="{{url("delete-cart",["id"=>$item->id])}}">
                                                            <i class="ti-close"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="select-total">
                                            <span>total:</span>
                                            <h5>{{number_format($total)}}đ</h5>
                                        </div>
                                    @endif
                                </div>
                                <div class="select-button">
                                    <a href="{{url("shopping-cart")}}" class="primary-btn view-card">VIEW CARD</a>
                                    <a href="{{url("checkout")}}" class="primary-btn checkout-btn">CHECK OUT</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li><a href="{{url("/")}}">Home</a></li>
                    <li>
                        <div class="nav-depart">
                            <div class="depart-btn">
                                <span>Shop</span>
                                <ul class="depart-hover">
                                    @foreach($prosuct_type as $product_t)
                                    <li ><a href="{{url("product-type",["id"=>$product_t->id])}}">{{$product_t->name}} </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{url("new-product")}}">New Products</a></li>
                    <li><a href="{{url("sale-product")}}">Sale Products</a></li>
                    <li><a href="{{url("about-us")}}">About Us</a></li>
                    <li><a href="{{url("contact-us")}}">Contact Us</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>

