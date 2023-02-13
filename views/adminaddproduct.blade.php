<!DOCTYPE html>
<html>
  @include('partials.head')
<body>
  @include('partials.adminnavi')

<form action="<?=config('app.url'); ?>/addproduct" method="post">
@csrf
 <table>
 <tr>
 <td>Name</td>
 <td><input type="text" id="name" name="name" required/></td>
 </tr>
 <tr>
 <td>Ingredient</td>
 <td>        <select id="idIngredient" name="idIngredient" required>
    @foreach($ingredient as $el)
      <option
              value="{{$el->id}}">
              {{$el->name}}
      </option>
      @endforeach
    </select></td>
 </tr>
  <tr>
 <td>Indication</td>
 <td>        <select id="idIndication" name="idIndication" required>
    @foreach($problem as $el)
      <option
              value="{{$el->id}}">
              {{$el->name}}
      </option>
      @endforeach
    </select></td>
 </tr>
  <tr>
 <td>Side Effect</td>
 <td>        <select id="idSideEffect" name="idSideEffect" required>
    @foreach($problem as $el)
      <option
              value="{{$el->id}}">
              {{$el->name}}
      </option>
      @endforeach
    </select></td>
 </tr>
  <tr>
 <td>Usage</td>
 <td><input type="text" id="usage" name="usage" required/></td>
 </tr>
  <tr>
 <td>Price</td>
  <td><input type="number" step="0.01" id="price" min="0.01" max="999" name="price" pattern="[0-9]+.[0-9]{2}" required/></td>
 </tr>
  <tr>
 <td>Image</td>
 <td><input type="text" id="image" name="image" placeholder="link to image" required/></td>
 </tr>
 </table>
 <button type="submit">Save</button>
 </form>

</body>
</html>