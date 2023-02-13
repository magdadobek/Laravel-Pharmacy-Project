<!DOCTYPE html>
<html>
  @include('partials.head')
<body>
  @include('partials.navi')
<table>
    <tr>
        <td>
            <td class="image-td">
                <div class="img-box-show">
                    <img src="{{$product->image}}" alt="">
                </div>
            </td>
            <td>
                <h1>{{$product->name}}</h1>
                <h1>{{$product->price}} $</h1>
                <h4>Indication:</h4>
                <h5>{{$product->id_indication}}</h5>
                <h4>Possible side-effects:</h4>
                <h5>{{$sideEffect->name}}</h5>
                <h4>Form:</h4>
                <h5>{{$product->usage}}</h5>
                <h4>Main ingredient:</h4>
                @if(isset($ingredient->name))
                <h5>{{$ingredient->name}}</h5>
                @else
                <h5>none</h5> 
                @endif
            </td>
            <td>
                <div class="btn_container-index">
                      <a href="<?=config('app.url'); ?>/addCart/{{$product->id}}">
                        Buy Now
                      </a>
                    </div>
                    </td>
        </tr>
    </table>

 <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Magdalena Dobek
    </p>
  </section>
  <!-- footer section -->
</body>

</html>