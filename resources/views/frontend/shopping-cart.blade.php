@extends("frontend.layout")
@section("main")
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody style="text-align: center">
                            @php
                                $total = 0;$checkout=0;
                            @endphp
                            @foreach($cart as $item)
                                @php
                                    $total += $item->__get("price") * $item->cart_qty;
                                @endphp
                                <tr >
                                    <td class="cart-pic first-row"><img src="{{$item->getImage()}}" style="width:150px;height: 150px"></td>
                                    <td class=" first-row">
                                        <h5>{{$item['name']}}</h5>
                                        @if($item->qty < $item->cart_qty)
                                            <p class="text-danger"><i>Sản phẩm không đủ số lượng</i></p>
                                            @php $checkout++ @endphp
                                        @endif
                                    </td>
                                    <td class="p-price first-row">{{number_format($item['price'])}}</td>
                                    <td class="qua-col first-row">
                                        <form action="{{url("update-cart",["id"=>$item->id])}}" method="get">
                                            <button type="submit" style="width: 40%;">Update</button>
                                            <input type="number" name="cart_qty" value="{{$item->cart_qty}}" style="width: 60%;float:left;">

                                        </form>
                                    </td>
                                    <td class="total-price first-row">{{ number_format($item['price'] * $item['cart_qty']) }}</td>

                                    <td class="close-td first-row"><a href="{{url("clear-cart")}}" ><i class="ti-close"></i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-8" style="float: right">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="cart-total">Total <span>{{ number_format($total) }}</span></li>
                                </ul>
                                <a href="{{url("checkout")}}" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection
