@extends("frontend.layout")
@section("main")
    <div class="container" >
        <div class="breadcrumb-text" style="margin-top: 40px" >
            <a href="{{url("/")}}" style="font-size: 17px"><i class="fa fa-home"></i> Home</a>
            <span style="font-size: 17px" >Check Out</span>
        </div>
    </div>
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <form action="{{url("checkout")}}" method="post" >
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Customer Name</label>
                            <input type="text" name="customer_name" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Customer Tel</label>
                            <input type="tel" name="customer_tel" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Customer Address</label>
                            <textarea class="form-control" name="customer_address"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cart-table">
                            <table class="table">
                                <thead>
                                    <tr >
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $total = 0;$checkout=0; @endphp
                                @foreach($cart as $item)
                                    @php $total += $item->cart_qty * $item->__get("price") @endphp
                                    <tr style="text-align: center;color: black">
                                        <td><img src="{{$item->getImage()}}" width="50" height="50"/> </td>
                                        <td>
                                            <p style="color: black">{{$item->__get("name")}}</p>
                                            @if($item->qty < $item->cart_qty)
                                                <p class="text-danger"><i>Sản phẩm không đủ số lượng</i></p>
                                                @php $checkout++ @endphp
                                            @endif
                                        </td>
                                        <td>{{$item->__get("price")}}</td>
                                        <td>{{$item->cart_qty}}</td>
                                        <td>{{number_format($item->cart_qty * $item->__get("price"))}}đ</td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="4">Grand Total</td>
                                    <td>{{number_format($total)}}đ</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        @if($checkout ==0)
                                            <div class="form-group">
                                                <button class="btn btn-outline-primary" type="submit">Place order</button>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
