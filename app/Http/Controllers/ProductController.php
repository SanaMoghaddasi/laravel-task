<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index()
    {
//        $products = Product::all()->toArray();
//        $products = Product::query()->get();
//        $products = Product::query()->count();
//        Product::query()->where('id', 60)->exists();
//        $products = Product::query()->where('id', 2)->first();
//        $products = Product::query()->where('id', 2)
//            ->where('quantity', 5)
//            ->toRawSql();
//        $products = Product::query()->where('id', 2)
//            ->orWhere('is_special', 1)
//            ->get();
        //        $products = Product::query()->where('id', 2)
//            ->where('quantity', 5)
//            ->get();
//        $products = Product::query()->whereNull('attrs')->get();
//        $products = Product::query()->where(['id','1'],['is_special','1'])->toRawSql();
//        $products = Product::query()->orderByDesc('created_at')->get();
//        $products = Product::query()->find(4);
//        $products = Product::query()->avg('quantity');
//        $products = Product::query()->max('price');
//        $products = Product::query()->avg('quantity');
//        $products = Product::query()->selectRaw("id, name, quantity * old_price as total")->get();
//        $products = Product::query()->select(["id", "name" , "created_at"])->get();

        // مبحث دیلیت


//        $product = Product::query()
//            ->where('name', 'product jjj')
//            ->delete();
//
//        $product2 = Product::query()
//            ->where('name', 'product jjj')
//            ->first();
//
//        $product?->delete();
//
//        $product4 = Product::destroy(1, 3);

//        $product3 = Product::truncate();

//        dd($product4);

        // حذف سافت
//
//        $product = Product::query()
//            ->where('name', 'کفش اسپرت نایک')
//            ->delete();
////
//        $product2 = Product::query()
//            ->withTrashed()
//            ->restore();
//
//        $product3 = $product::query()
//            ->onlyTrashed()
//            ->get();

//        $product4 = Product::query()
//            ->withTrashed()
//            ->where('name', 'کفش اسپرت نایک')
//            ->first();
//
//        $product4?->forceDelete();
//
//        dd($product4);

//        dd($products->toArray());

//        $data = Product::query()
//            ->where('id', '7')
//            ->first();
////        $data1 = ProductCategory::query()
////            ->where('id', '43')
////            ->first();
//        dd($data->productCategory);
////        dd($data1?->product);

//        $product = ProductImage::find(1);
//        dd($product->product);

//        $product1 = Product::find(1);
//        dd($product1->productImage->toArray());
        $product = Product::query()
            ->whereHas('productImages', function ($query) {
                $query->where('status', '=', 1);
            })
            ->get();

        $product1 = Product::query()->withCount('orderItems')->get();
        $product2 = Product::query()->with('productCategory')->get();

    }
}
// ->name(user.sample)
