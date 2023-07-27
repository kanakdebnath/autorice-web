<?php

namespace App\Http\Controllers;

use App\Http\Helper\Helper;
use Illuminate\Support\Str;
use App\Models\Backend\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use PHPUnit\TextUI\Help;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = (new Product())->productList();
        return view('backend.modules.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->all();


        $offer_price = '';

        if ($data['discount_type']) {
            $price = $request->input('price');
            $discount = $request->input('discount_amount');
            if ($data['discount_type'] == 1) {
                $offer_price = $price - ($price / 100) * $discount;
            } else {
                $offer_price = $price - $discount;
            }
        }

        $data['offer_price'] = $offer_price;
        $data['slug'] = Str::slug($request->input('slug'));

        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $width = 1000;
            $height = 1000;
            $thumbWidth = 700;
            $thumbHeight = 600;
            $path = 'image/uploads/products/orginal/';
            $thumbPath = 'image/uploads/products/thumbnail/';

            $name =  Str::slug($request->input('slug')) . '-' . rand(11111, 99999) . '.webp';
            $data['photo'] = $name;

            Helper::imageUpload($photo, $width, $height, $path, $name);
            Helper::imageUpload($photo, $thumbWidth, $thumbHeight, $thumbPath, $name);
        }

        (new Product())->productStore($data);
        session()->flash('msg', 'Product added successfully');
        session()->flash('cls', 'success');
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backend\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('backend.modules.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('backend.modules.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Backend\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->input('slug'));

        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $width = 1000;
            $height = 1000;
            $thumbWidth = 700;
            $thumbHeight = 600;
            $path = 'image/uploads/product/orginal/';
            $thumbPath = 'image/uploads/product/thumbnail/';

            $name =  Str::slug($request->input('slug')) . '-' . rand(11111, 99999) . '.webp';
            $data['photo'] = $name;

            if ($product->photo != null) {
                Helper::unlinkImage($path, $product->photo);
                Helper::unlinkImage($thumbPath, $product->photo);
            }

            Helper::imageUpload($photo, $width, $height, $path, $name);
            Helper::imageUpload($photo, $thumbWidth, $thumbHeight, $thumbPath, $name);
        }

        (new Product())->productUpdate($data);
        session()->flash('msg', 'Ptoduct updated successfully');
        session()->flash('cls', 'success');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $path = 'image/uploads/product/orginal/';
        $thumbPath = 'image/uploads/product/thumbnail/';

        if ($product->photo != null) {
            Helper::unlinkImage($path, $product->photo);
            Helper::unlinkImage($thumbPath, $product->photo);
        }
        (new Product())->productDelete();
        return redirect()->back();
    }
}
