<div>
    <tr>
        <td>
            <div class="table-data">
                <a href="#" wire:click="removeCart({{$cart['id']}})" ><i class="fa fa-times"></i></a>
            </div>
        </td>
        <td>
            <div class="table-data">
                <img src="{{$cart['thumb']}}" width="80" alt="">
            </div>
        </td>
        <td>
            <div class="table-data">
                <h6><a href="/item/{{$cart['slug']}}" class="title">{{$cart['name']}}</a></h6>
            </div>
        </td>
        <td>
            <div class="table-data">
                <span class="price">$ETB {{$cart['price']}}</span>
            </div>
        </td>
        <td>
            <div class="table-data">
                <input name="qnt{{$cart['id']}}" type="number" value="{{$cart['quantity']}}" style="margin-right: 20px; width: 119px;" wire:change="changeCartQnt({{$cart['id']}})">
            </div>
        </td>
        <td>
            <div class="table-data">
                <span class="total">$ETB{{$cart['price'] * $cart['quantity']}}</span>
            </div>
        </td>
    </tr>
</div>
