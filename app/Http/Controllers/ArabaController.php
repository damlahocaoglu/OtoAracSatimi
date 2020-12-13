<?php

namespace App\Http\Controllers;

use App\Category;
use App\Iletisim;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArabaController extends Controller
{
    public function urunler(){
        $product=DB::table('products')->get();
        return view('car.index')->with('product',$product);
    }
    public function ekle(){
        return view('arabaekle');
    }
    public function arabaeklepost(Request $request){
        $product= new Product();
        $product->name=$request->input('adi');
        $product->color=$request->input('renk');
        $product->km=$request->input('km');
        $product->price=$request->input('fiyat');
        $product->category_id=$request->input('category_id');
        $product->save();

        return redirect('urunler');

    }

    public  function arabaduzenle(Request $request){
        $id = $request->id;
        $products = Product::find($id);
        return view('car.update',compact('products'));
    }

    public  function arabaduzenlepost(Request $request){
        $id = $request->id;
        $product = Product::find($id);
        $product->name = $request->input('adi');
        $product->color = $request->input('renk');
        $product->km = $request->input('km');
        $product->price = $request->input('fiyat');
        $product->save();

        return redirect()->action('ArabaController@urunler');   }

    public function arabasil($id)
    {
        DB::table('products')
            ->delete($id);
        return back();
    }



        public  function iletisim(){
            return view('iletisim');
       }
          public function iletisimform(Request $request){
        $iletisim= new Iletisim();
        $iletisim->name= $request->input('name');
        $iletisim->email=$request->input('email');
        $iletisim->message=$request->input('message');
        $iletisim->save();

              return back()->with('status','Mesaj Gönderildi');
    }


}
