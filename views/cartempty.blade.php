<!DOCTYPE html>
<html>
  @include('partials.head')
<body>
  @include('partials.navi')

  <h1>Can't make Order! Cart is empty!</h1>
  <a href="<?=config('app.url'); ?>/cart">return</a>
  <section class="container-fluid footer_section">
    <p>
      Magdalena Dobek
    </p>
  </section>