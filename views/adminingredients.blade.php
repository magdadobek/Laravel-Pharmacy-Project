<!DOCTYPE html>
<html>
  @include('partials.head')
<body>
  @include('partials.adminnavi')
  <form action="<?=config('app.url'); ?>/adminaddingredient" method="get">@csrf<button>Add new ingredient</button></form>
<table class="product-table">
  <thead>
    <tr>
      <td>ID</td>
      <td>Name</td>
      <td>Delete</td>
    </tr>
  </thead>
  @foreach($ingredient as $el)
  <tr>
    <td>{{$el->id}}</td>
    <td>{{$el->name}}</td>
    <td><form action="<?=config('app.url'); ?>/deleteingredient/{{$el->id}}" method="post">@csrf<button>Delete</button></form></td>
  </tr>
  @endforeach
</table>

</body>
</html>