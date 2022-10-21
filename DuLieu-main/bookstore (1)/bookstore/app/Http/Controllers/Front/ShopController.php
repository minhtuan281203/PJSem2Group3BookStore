<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\Cart;
use App\Models\Author;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Services\ProductComment\ProductCategoryRepositoryInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function showDetail($id){
        $authors = Author::all();
        $categories = ProductCategory::all();
        $products = Product::findOrFail($id);


        return view('front.shop.show', compact('products', 'authors', 'categories', ));
    }

    public function index(Request $request){
        $authors = Author::all();
        $categories = ProductCategory::all();

        $perPage = $request->show ?? 3;
        $search = $request->search ?? '';
        $products = Product::where('name', 'like', '%'. $search . '%');
        $products = $this->filter($products,$request);

        return view('front.shop.index', compact('products', 'authors', 'categories'));
    }

    //ham xu ly sap xep sp
    public function sortPagination($products, $perPage){

        $products = $products->paginate($perPage);

        $products->appends(['show' => $perPage]);

        return $products;

    }

   public function category($categoryName , Request $request)
   {
       $categories = ProductCategory::all();
       $products = ProductCategory::where('name',$categoryName)->first()->products->toQuery();
       $products = $this->filter($products,$request);
       $authors = Author::all();
       return view('front.shop.index', compact('products', 'categories','authors'));
   }
    public function filter($products,$request){
        $priceMin = $request->price_min;
        $priceMax = $request->price_max;
        $author = $request->author;
        //Price
        $products = ($priceMax!=null && $priceMin!=null) ? $products->whereBetween('price',[$priceMin,$priceMax]) : $products;
        //Author
        $products =($author!=0 && $author!=null) ? $products->where('author_id',$request->author) : $products;

        $products = $products->paginate(5);
        $products->appends(['price_min'=>$priceMin,'price_max'=>$priceMax,'author'=>$request->author]);
        return $products;
    }
}
