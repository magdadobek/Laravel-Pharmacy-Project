<!DOCTYPE html>
<html>
  @include('partials.head')
<body>
  @include('partials.navi')

  <table class="cart-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Done</th>
        </tr>
    </thead>
    <tbody>
        @php
            $totalPrice = 0;
        @endphp
        @foreach($order as $el)
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
            <td class="cart-quantity">{{$el->quantity}}</td>
            @if($el->done==false)
            <td class="cart-quantity">In progress</td>
            @endif
            @if($el->done==true)
            <td class="cart-quantity">Done</td>
            @endif
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