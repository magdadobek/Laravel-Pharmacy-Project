<table class="header-table">
  <tr>
    <td>
      <a href="<?=config('app.url'); ?>/">
        <img alt="" src="images/logo.png" style="vertical-align:middle;">
        <span style="margin-left:10px; font-weight:bold; font-size:20px">Pharma-see</span>
      </a>
    </td>
    <td>
      <a href="<?=config('app.url'); ?>/medicine" style="text-decoration:none;">
        <span style="margin-left:10px;">Medicine</span>
      </a>
    </td>
    <td>
      <a href="<?=config('app.url'); ?>/contact" style="text-decoration:none;">
        <span style="margin-left:10px;">Contact</span>
      </a>
    </td>
     <td>
      <a href="<?=config('app.url'); ?>/search" style="text-decoration:none;">
        <span style="margin-left:10px;">Search</span>
      </a>
    </td>
    <td>
    @if(Auth::check())
      <a href="<?=config('app.url'); ?>/showorders" style="text-decoration:none;">
        <span style="margin-left:10px;">Show Orders</span>
      </a>
      @endif
    </td>
    <td>
    @if(Auth::check())
    <a href="<?=config('app.url'); ?>/logout" style="text-decoration:none;">
        <img alt="" src="images/user.png" style="vertical-align:middle;">
        <span style="margin-left:10px;">Logout</span>
      </a>
@else
<a href="<?=config('app.url'); ?>/login" style="text-decoration:none;">
        <img alt="" src="images/user.png" style="vertical-align:middle;">
        <span style="margin-left:10px;">Login</span>
      </a>
@endif
    </td>
    <td>
      <a href="<?=config('app.url'); ?>/cart" style="text-decoration:none;">
        <img alt="" src="images/shopping-cart.png" style="vertical-align:middle;">
        <span style="margin-left:10px;">Cart</span>
      </a>
    </td>
    @if(Auth::id()==5)
    <td>
      <a href="<?=config('app.url'); ?>/admin" style="text-decoration:none;">
        <span style="margin-left:10px;">Admin</span>
      </a>
    </td>
    @endif
  </tr>
</table>