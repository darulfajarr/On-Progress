<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Product;
use App\Home;
use App\discont;
use App\About;
use App\kategori;
use App\artikel;
use App\Store;
use App\Lainnya;
use Laratrust\LaratrustFacade as Laratrust;
use Illuminate\Support\Str;


class GuestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function chat(Request $request, Builder $htmlBuilder)
    {
       return view('welcome');
   }
 
  

    public function index(Request $request, Builder $htmlBuilder)
    {
       $Home = Home::all();
        $discont = discont::orderBy('created_at','DESC')->get();

       return view('guest.home')->with(compact('Home','discont'));
   }
     public function artikells(Request $request, Builder $htmlBuilder)
    {
       $artikel = artikel::orderBy('created_at','desc')->paginate(5);
       return view('guest.artikel')->with(compact('artikel'));
   }
 
  
  
  public function products(kategori $kategori)
   {

       $Product = Product::orderBy('nama_product','asc')->paginate(2);
       $kategori = kategori::all();
       return view('guest.products')->with(compact('Product','kategori')); 
   }

   public function news(Request $request, Builder $htmlBuilder)
   {
        $kategori = kategori::all();
       $Product = Product::orderBy('created_at','desc')->take(5)->get();
       return view('guest.news')->with(compact('Product','kategori')); 
   }



public function store(Request $request, Builder $htmlBuilder)
   {
       $Store = Store::all();
       $Lainnya = Lainnya::all();
       return view('guest.store')->with(compact('Store','Lainnya')); 
   }

public function about(Request $request, Builder $htmlBuilder)
   {
       $About = About::all();
       return view('guest.about')->with(compact('About')); 
   }

public function showperkategori(kategori $kategori)
   {
       $filtercategori = $kategori->product()->paginate(5);
       return view('guest.kategori')->with(compact('filtercategori','kategori')); 
   }
public function show(artikel $artikel)
   {
     
        return view('guest.show')->with(compact('artikel')); 
   }

}



