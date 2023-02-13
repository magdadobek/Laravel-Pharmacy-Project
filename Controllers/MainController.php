<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Problem;
use App\Models\Ingredient;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function returnHome(){
        return view('index');
    }

    public function returnContact(){
        return view('contact');
    }

    public function returnMedicine(){
        $dbMedicine=DB::table('product') -> get();
        return view('medicine', ['product' => $dbMedicine]);
    }

    public function returnShow($id){
        $product=Product::find($id);
        $indication=Problem::find($product->idIndication);
        $sideEffect=Problem::find($product->idSideEffect);
        $ingredient=Ingredient::find($product->idIngredient);
        return view('show', ['product' => $product, 'indication' => $indication,
    'sideEffect' => $sideEffect, 'ingredient' => $ingredient]);
    }

    public function returnSearch(){
        $ingredient=DB::table('ingredient') -> get();
        $indication=DB::table('problem') -> get();
        return view('search', ['ingredient' => $ingredient, 'indication' => $indication]);
    }

    public function returnSearchIndication($id){
        $product=Product::where('idIndication', $id) -> get();
        return view('searchindication', ['product' => $product]);
    }

    public function returnSearchIngredient($id){
        $product=Product::where('idIngredient', '!=', $id) -> get();
        return view('searchingredient', ['product' => $product]);
    }

    public function returnSearchName($name){
        $name2 =$_GET['name'];
        $product=Product::where('name', 'like','%' . $name . '%') -> get();
        return view('searchname', ['product' => $product]);
    }

    public function returnCart(){
        if (Auth::check()) {
            $userId = Auth::id();
            $cart = Cart::where('idUser', $userId)->get();
            $dbMedicine=DB::table('product') -> get();
            return view('cart', ['cart' => $cart, 'product'=>$dbMedicine]);
        } else {
            return redirect()->route('login');
        }
    }

    public function addToCart($id){
        if (Auth::check()) {
            $userId = Auth::id();
            $cart = new Cart();
            $cart->idUser = $userId;
            $cart->idProduct = $id;
            $check = Cart::where('idUser', $userId)
            -> where('idProduct', $id)->first();
            if($check){
                $check->quantity +=1;
                $check->save();
            }
            else{
                $cart->quantity=1;
                $cart->save();
            }
            return redirect('cart');
        } else {
            return redirect()->route('login');
        }
    }    

    public function reduceQuantity($id){
        if (Auth::check()) {
            $userId = Auth::id();
            $cart = Cart::find($id);
            if($cart->quantity==1){
                $cart->delete();
                return redirect('/cart');
            }
            else{
                $cart->quantity-=1;
                $cart->save();
            }
            return redirect('cart');
        } else {
            return redirect()->route('login');
        }
    }

    public function enlargeQuantity($id){
        if (Auth::check()) {
            $userId = Auth::id();
            $cart = Cart::find($id);
                $cart->quantity+=1;
                $cart->save();
            return redirect('cart');
        } else {
            return redirect()->route('login');
        }
    }

    public function makeorder(){
        if(Auth::check()){
            $userId = Auth::id();
            $cart = Cart::where('idUser', $userId)->get();
            if(empty($cart)) return redirect('cartempty');
            foreach($cart as $toDelete){
                $order= new Order();
                $order->idUser=$toDelete->idUser;
                $order->idProduct=$toDelete->idProduct;
                $order->quantity=$toDelete->quantity;
                $order->done=false;
                $order->save();
                $toDelete->delete();
            }return redirect('orderMade');
        } else {
            return redirect()->route('login');
        }
    }

    public function cartempty(){
        return view('cartempty');
    }

    public function searchbyname(){
        $name =$_GET['name'];
        $product=Product::where('name', 'ilike','%' . $name . '%') -> get();
        return view('searchname', ['product' => $product]);
        /*
        $name2 =$_GET['name'];
        $name = $request->input('name');
        */
    }     

    public function returnOrderMade(){
        return view('orderMade');
    }

    public function showOrders(){
        if (Auth::check()) {
            $userId = Auth::id();
            $order = Order::where('idUser', $userId)->get();
            $dbMedicine=DB::table('product') -> get();
            return view('showorders', ['order' => $order, 'product'=>$dbMedicine]);
        } else {
            return redirect()->route('login');
        }
    }

    public function changeAuthState()
{
 if(auth()->check()){
 $user = auth()->user();
 Auth::logout();
 return view('logout');
 }
 else{
 return redirect('/register');
 }
}



}
