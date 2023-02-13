<!DOCTYPE html>
<html>
  @include('partials.head')
<body>
  @include('partials.navi')
    <!-- end header section -->
  <!-- health section -->
  <section class="health_section">
@foreach($product as $el)
  <div class="item">
    <div class="box">
        <div class="btn_container">
            <a href="<?=config('app.url'); ?>/show/{{$el->id}}">
              Buy Now
            </a>
        </div>
        <div class="img-box">
            <img src="{{$el->image}}" alt="">
        </div>
        <div class="detail-box">
            <div class="name">
                <h6>{{$el->name}}</h6>
                </div>
                <h6 class="price">{{$el->price}} $</h6>
                <h6>$</h6>
        </div>
    </div>
  </div>
  @endforeach
</section>
  <!-- end health section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Magdalena Dobek
    </p>
  </section>
  <!-- footer section -->
</body>

</html>