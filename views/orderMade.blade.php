<!DOCTYPE html>
<html>
  @include('partials.head')
<body>
  @include('partials.navi')
<h1>Thank you for ordering!</h1>
<h2>You can check your order status</h2>
<a href="<?=config('app.url'); ?>/showorders">here</a>
</body>
</html>