<!DOCTYPE html>
<html>
  @include('partials.head')
<body>
  @include('partials.navi')

  <div class="btn_container-index">
                    <form action="<?=config('app.url'); ?>/makeorder" method="Post">@csrf<button>Make order</button></form>
                </div>

  <table class="cart-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th></th>
            <th>Quantity</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @php
            $totalPrice = 0;
        @endphp
        @foreach($cart as $el)
        <tr>
        @foreach($product as $le)
            @if($el->idProduct==$le->id)
            <td>{{$le->name}}</td>
            <td class="cart-price">{{$le->price*$el->quantity}}</td>
            @php
            $totalPrice += $le->price*$el->quantity;
            @endphp
            @endif
        @endforeach
            <td class="cart-controls">
                <form action="<?=config('app.url'); ?>/reduce/{{$el->id}}" method="Post">@csrf<button style="color:red;">-</button></form>
            </td>
            <td class="cart-quantity">{{$el->quantity}}</td>
            <td class="cart-controls">
            <form action="<?=config('app.url'); ?>/enlarge/{{$el->id}}" method="Post">@csrf<button style="color:green;">+</button></form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td>Sum</td>
            <td class="cart-total-price">{{$totalPrice}}</td>
        </tr>
    </tfoot>
</table>


  <section class="container-fluid footer_section">
    <p>
      Magdalena Dobek
    </p>
  </section>
  <!-- footer section -->
</body>

</html>