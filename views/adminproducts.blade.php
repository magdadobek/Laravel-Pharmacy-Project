<!DOCTYPE html>
<html>
  @include('partials.head')
<body>
  @include('partials.adminnavi')
  <form action="<?=config('app.url'); ?>/adminaddproduct" method="get">@csrf<button>Add new product</button></form>
<table class="product-table">
  <thead>
    <tr>
      <td>ID</td>
      <td>Name</td>
      <td>Main ingredient</td>
      <td>Indication</td>
      <td>Side Effect</td>
      <td>Usage</td>
      <td>Price</td>
      <td>Edit</td>
      <td>Delete</td>
    </tr>
  </thead>
  @foreach($product as $el)
  <tr>
    <td>{{$el->id}}</td>
    <td>{{$el->name}}</td>
    @foreach($ingredient as $ing)
    @if($el->idIngredient==$ing->id)
    <td>{{$ing->name}}</td>
    @endif
    @endforeach
    @foreach($problem as $prob)
    @if($el->idIndication==$prob->id)
    <td>{{$prob->name}}</td>
    @endif
    @if($el->idSideEffect==$prob->id)
    <td>{{$prob->name}}</td>
    @endif
    @endforeach
    @if(isset($el->usage))
    <td>{{$el->usage}}</td>
    @elseif($el->usage=="")
    <td></td>
    @endif
    @if(isset($el->price))
    <td>{{$el->price}}</td>
    @elseif($el->price=="")
    <td></td>
    @endif
    <td><form action="<?=config('app.url'); ?>/edit/{{$el->id}}" method="get">@csrf<button>Edit</button></form></td>
    <td><form action="<?=config('app.url'); ?>/deleteproduct/{{$el->id}}" method="post">@csrf<button>Delete</button></form></td>
  </tr>
  @endforeach
</table>

</body>
</html>