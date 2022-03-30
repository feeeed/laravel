<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;
class MainController extends Controller
{
    public function start(){
        $products =product::get();
        return view ('start',compact('products'));
    }

    public function film($idfilm){
        $Film = product::where('code',$idfilm)->first();
        return view('Film',compact('Film'));
    }
    public function auth(){
        return view('auth');
    }
    public function categories(){
        $categories = Category::get();
        return view('categories',compact('categories'));
    }
    public function category($code){
        $category = Category::where('code',$code)->first();
        return view('category',compact('category'));
    }


}
