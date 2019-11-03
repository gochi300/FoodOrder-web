<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Image;
use File;

class AdminProductsController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function view($id)
    {
        $product = Product::where('id', '=', $id)->first();
        return view('admin.products.view', compact('product'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->productName = $request->productName;
        $product->productPrice = $request->productPrice;
        $product->productCategory = $request->productCategory;

        if($request->productImage != null){
            $this->validate($request, ['productImage' => 'required|image|mimes:jpg,png,jpeg|max:5120',]);
            $imageName = time().'-1.'.$request->productImage->getClientOriginalExtension();
            /*image intervention*/
            $uploadedImage = $request->productImage;
            $newImage = Image::make($uploadedImage->getRealPath());
            $newImage->resize(800, 800, function ($constraint) {
                $constraint->aspectRatio();
            })->save('images/'.$imageName, 60 );
            /*save to db*/
            $product->productImage = $imageName;
        }
        $product->save();

        return redirect('/products');

    }

    public function destroy($id)
    {
        $post = Product::where('id', '=', $id)->first();
        File::delete('images/'. $post->productImage);
        // **
        Product::destroy($id);

        return redirect('/products');

    }
}
