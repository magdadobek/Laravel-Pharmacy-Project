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

class AdminController extends Controller
{
    public function returnMain(){
        if (Auth::check() && Auth::id()==5) {
        return view('admin');
    } else {
        return redirect()->route('login');
    }
    }

    public function returnAddProduct(){
        if (Auth::check() && Auth::id()==5) {
            $products=DB::table('product') -> get();
            $ingredients=DB::table('ingredient') -> get();
            $problems=DB::table('problem') -> get();
            return view('adminaddproduct', ['product' => $products, 'ingredient'=>$ingredients, 'problem'=>$problems]);
    } else {
        return redirect()->route('login');
    }
    }

    public function returnEditProduct($id){
        if (Auth::check() && Auth::id()==5) {
            $product=Product::find($id);
            $ingredients=DB::table('ingredient') -> get();
            $problems=DB::table('problem') -> get();
            return view('admineditproduct', ['product' => $product, 'ingredient'=>$ingredients, 'problem'=>$problems]);
    } else {
        return redirect()->route('login');
    }
    }

    public function returnAddProblem(){
        if (Auth::check() && Auth::id()==5) {
            $problems=DB::table('problem') -> get();
            return view('adminaddproblem', ['problem'=>$problems]);
    } else {
        return redirect()->route('login');
    }
    }

    public function returnAddIngredient(){
        if (Auth::check() && Auth::id()==5) {
            $ingredients=DB::table('ingredient') -> get();
            return view('adminaddingredient', ['ingredient'=>$ingredients]);
    } else {
        return redirect()->route('login');
    }
    }

    public function returndeleted(){
        if (Auth::check() && Auth::id()==5) {
        return view('admindeleted');
    } else {
        return redirect()->route('login');
    }
    }

    public function returnproducts(){
        if (Auth::check() && Auth::id()==5) {
            $products=DB::table('product') -> get();
            $ingredients=DB::table('ingredient') -> get();
            $problems=DB::table('problem') -> get();
            return view('adminproducts', ['product' => $products, 'ingredient'=>$ingredients, 'problem'=>$problems]);
    } else {
        return redirect()->route('login');
    }
    }

    public function returningredients(){
        if (Auth::check() && Auth::id()==5) {
            $ingredients=DB::table('ingredient') -> get();
            return view('adminingredients', ['ingredient'=>$ingredients]);
    } else {
        return redirect()->route('login');
    }
    }

    public function returnproblems(){
        if (Auth::check() && Auth::id()==5) {
            $problems=DB::table('problem') -> get();
            return view('adminproblems', ['problem'=>$problems]);
    } else {
        return redirect()->route('login');
    }
    }

    public function returnorders(){
        if (Auth::check() && Auth::id()==5) {
            $orders=DB::table('order') -> get();
            $products=DB::table('product') -> get();
            return view('adminorders', ['order'=>$orders, 'product' => $products]);
    } else {
        return redirect()->route('login');
    }
    }

    public function deleteproduct($id){
        if (Auth::check() && Auth::id()==5) {
            $product=Product::find($id);
            $product->delete();
        return redirect('admindeleted');
    } else {
        return redirect()->route('login');
    }
    }

    public function deleteproblem($id){
        if (Auth::check() && Auth::id()==5) {
            $problem=Problem::find($id);
            $problem->delete();
        return redirect('admindeleted');
    } else {
        return redirect()->route('login');
    }
    }

    public function deleteingredient($id){
        if (Auth::check() && Auth::id()==5) {
            $ingredient=Ingredient::find($id);
            $ingredient->delete();
        return redirect('admindeleted');
    } else {
        return redirect()->route('login');
    }
    }

    public function deleteorder($id){
        if (Auth::check() && Auth::id()==5) {
            $order=Order::find($id);
            $order->delete();
        return redirect('admindeleted');
    } else {
        return redirect()->route('login');
    }
    }

    public function finishorder($id){
        if (Auth::check() && Auth::id()==5) {
            $order=Order::find($id);
            $order->done=true;
            $order->save();
        return redirect('adminorders');
    } else {
        return redirect()->route('login');
    }
    }

    public function addproduct(Request $request){
        if (Auth::check() && Auth::id()==5) {
            $product = new Product();
            $product->name = $request->name;
            $product->price = $request->price;
            $product->image = $request->image;
            $product->usage = $request->usage;
            $product->idIngredient = $request->idIngredient;
            $product->idSideEffect = $request->idSideEffect;
            $product->idIndication = $request->idIndication;
            $product->save();
            return redirect('adminproducts');
        } else {
            return redirect()->route('login');
        }
    }

    public function editProduct(Request $request, $id){
        if (Auth::check() && Auth::id()==5) {
            $product = Product::find($id);
            $product->name = $request->name;
            $product->price = $request->price;
            $product->image = $request->image;
            $product->usage = $request->usage;
            $product->idIngredient = $request->idIngredient;
            $product->idSideEffect = $request->idSideEffect;
            $product->idIndication = $request->idIndication;
            $product->save();
            return redirect('adminproducts');
        } else {
            return redirect()->route('login');
        }
    }

    public function addingredient(Request $request){
        if (Auth::check() && Auth::id()==5) {
            $ingredient = new Ingredient();
            $ingredient->name = $request->name;
            $ingredient->save();
            return redirect('adminingredients');
        } else {
            return redirect()->route('login');
        }
    }

    public function addproblem(Request $request){
        if (Auth::check() && Auth::id()==5) {
            $problem = new Problem();
            $problem->name = $request->name;
            $problem->save();
            return redirect('adminproblems');
        } else {
            return redirect()->route('login');
        }
    }
}
