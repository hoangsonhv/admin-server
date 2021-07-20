@if(\Illuminate\Support\Facades\Session::has("Cart"))
    <div class="select-items">
        <table>
            <tbody>
            @foreach(\Illuminate\Support\Facades\Session::get("Cart")->products as $item)
                <tr>
                    <td class="si-pic"><img src="upload/{{$item['productInfo']->image}}" style="width: 72px;height: 72px"></td>
                    <td class="si-text">
                        <div class="product-selected">
                            <p>{{number_format($item['productInfo']->price)}}₫ x {{$item['qty']}}</p>
                            <h6>{{$item['productInfo']->name}}</h6>
                        </div>
                    </td>
                    <td class="si-close">
                        <i class="ti-close" data-id="{{$item['productInfo']->id}}"></i>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="select-total">
        <span>total:</span>
        <h5>{{number_format(\Illuminate\Support\Facades\Session::get("Cart")->totalPrice)}}đ</h5>
        <input type="hidden" id="total-qty-cart" value="{{\Illuminate\Support\Facades\Session::get("Cart")->totalQty}}">
    </div>
@endif
