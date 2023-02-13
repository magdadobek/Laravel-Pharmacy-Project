<!DOCTYPE html>
<html>
  @include('partials.head')
<body>
  @include('partials.navi')
  <!-- form section -->
	<table class="searchform-table">
	<tr class="searchform-tr">
	<td class="searchform-td">
	<h4>Name: </h4>
  <form id="searchForm1" action="<?=config('app.url'); ?>/searchbyname" method="get">
    <input type="search" id="input_name" name="name" required><br><br>
    <div class="btn_search">
        <button type="submit">Search</button>
    </div>
</form>
	</td>
	</tr>
<tr class="searchform-tr">
  <td class="searchform-td">
    <h4>Unwanted Ingredient: </h4>
    <select id="ingredient-select" onchange="appendValueToLink2()">
    @foreach($ingredient as $el)
      <option
              value="{{$el->id}}">
              {{$el->name}}
      </option>
      @endforeach
    </select>
        <br><br>
        <div class="btn_search">
      <a id="search-link2" href="<?=config('app.url'); ?>/searchingredient/">
        Search
      </a>
    </div>
  </td>
</tr>
<tr class="searchform-tr">
  <td class="searchform-td">
    <h4>Indication: </h4>
    <select id="indication-select" onchange="appendValueToLink()">
    @foreach($indication as $el)
    <option
              value="{{$el->id}}">
              {{$el->name}}
      </option>
      @endforeach
    </select>
    <br><br>
        <div class="btn_search">
        <a id="search-link3" href="<?=config('app.url'); ?>/searchindication/">
            Search
      </a>
    </div>
  </td>
</tr>
	</table>
  <!-- end form section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Magdalena Dobek
    </p>
  </section>
  <!-- footer section -->
</body>
<script>
    function appendValueToLink() {
    	  var select = document.getElementById("indication-select");
    	  var selectedValue = select.value;
    	  var link = document.getElementById("search-link3");
    	  link.href += selectedValue;
    	}
    
    function appendValueToLink2() {
  	  var select = document.getElementById("ingredient-select");
  	  var selectedValue = select.value;
  	  var link = document.getElementById("search-link2");
  	  link.href += selectedValue;
  	}
</script>
</html>