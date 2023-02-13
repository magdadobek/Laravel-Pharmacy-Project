<!DOCTYPE html>
<html>
  @include('partials.head')
<body>
  @include('partials.adminnavi')
  <form action="<?=config('app.url'); ?>/adminaddproblem" method="get">@csrf<button>Add new problem</button></form>
<table class="product-table">
  <thead>
    <tr>
      <td>ID</td>
      <td>Name</td>
      <td>Delete</td>
    </tr>
  </thead>
  @foreach($problem as $el)
  <tr>
    <td>{{$el->id}}</td>
    <td>{{$el->name}}</td>
    <td><form action="<?=config('app.url'); ?>/deleteproblem/{{$el->id}}" method="post">@csrf<button>Delete</button></form></td>
  </tr>
  @endforeach
</table>

</body>
</html>