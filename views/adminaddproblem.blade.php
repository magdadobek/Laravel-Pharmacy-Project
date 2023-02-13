<!DOCTYPE html>
<html>
  @include('partials.head')
<body>
  @include('partials.adminnavi')

<form action="<?=config('app.url'); ?>/addproblem" method="post">
@csrf
 <table>
 <tr>
 <td>Name</td>
 <td><input type="text" id="name" name="name" required/></td>
 </tr>
 </table>
 <button type="submit">Save</button>
 </form>

</body>
</html>