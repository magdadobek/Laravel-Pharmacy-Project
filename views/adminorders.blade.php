<!DOCTYPE html>
<html>
  @include('partials.head')
<body>
  @include('partials.adminnavi')
<table class="product-table">
  <thead>
    <tr>
      <td>ID</td>
      <td>Product</td>
      <td>User Id</td>
      <td>Done</td>
      <td>Finish order</td>
      <td>Delete</td>
    </tr>
  </thead>
  @foreach($order as $el)
  <tr>
    <td>{{$el->id}}</td>
    @foreach($product as $ing)
    @if($el->idProduct==$ing->id)
    <td>{{$ing->name}}</td>
    @endif
    @endforeach
    <td>{{$el->idUser}}</td>
    @if($el->done==true)
    <td>Zakończone</td>
    @elseif($el->done==false)
    <td>Nie zakończone</td>
    @endif
    <td><form action="<?=config('app.url'); ?>/finishorder/{{$el->id}}" method="post">@csrf<button>Finish</button></form></td>
    <td><form action="<?=config('app.url'); ?>/deleteorder/{{$el->id}}" method="post">@csrf<button>Delete</button></form></td>
  </tr>
  @endforeach
</table>

</body>
</html>