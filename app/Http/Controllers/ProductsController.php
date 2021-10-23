<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Google\Cloud\Storage\StorageClient;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = app('firebase.firestore')->database()->collection('Products')->documents();
        return view('products.index', ["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $product = new Product();
        return view('products.create',["product" => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $UUID = Uuid::uuid1()->getHex()->toString();
        $productRef = app('firebase.firestore')->database()->collection('Products')->document($UUID);

        $hasFile = $request->hasFile('product_image') && $request->product_image->isValid();
        if ($hasFile) {
            $file = $request->file('product_image');
            $filename = $file->getClientOriginalName();
            app('firebase.storage')->getBucket()->upload(fopen($request->product_image , 'r'), ['name' => 'images/' . $filename]);
            $productRef->set([
                'id'=>$UUID ,
                'name' => $request->name,
                'description' => $request->description,
                'price'    => $request->price,
                'created_at' => Carbon::now()->toDateTimeString(),
                'image' => "https://firebasestorage.googleapis.com/v0/b/restaurate-app.appspot.com/o/images%2F".$filename."?alt=media",
                'comment' => $request->comment
            ]);
        } else {
            $productRef->set([
                'id'=>$UUID ,
                'name' => $request->name,
                'description' => $request->description,
                'price'    => $request->price,
                'created_at' => Carbon::now()->toDateTimeString(),
                'image' => "https://firebasestorage.googleapis.com/v0/b/restaurate-app.appspot.com/o/images%2Fdefault_product.jpg?alt=media",
                'comment' => $request->comment
            ]);
        }

        $products = app('firebase.firestore')->database()->collection('Products')->documents();
        return view('products.index', ["products" => $products]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = new Product();
        $productRef = app('firebase.firestore')->database()->collection('Products')->document($id)->snapshot();
        $product->id="asdfasdfasdfasdfsad";
        $product->name=$productRef->data()['name'];
        $product->price=$productRef->data()['price'];
        $product->comment=$productRef->data()['comment'];
        $product->created_at=$productRef->data()['created_at'];
        $product->image=$productRef->data()['image'];
        $product->description=$productRef->data()['description'];
        
        return view('products.edit',['product'=>$product,'id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productRef = app('firebase.firestore')->database()->collection('Products')->document($id);
        $emptyImageRef = app('firebase.firestore')->database()->collection('Products')->document($id)->snapshot();
        $hasFile = $request->hasFile('product_image') && $request->product_image->isValid();
        if ($hasFile) {
            $file = $request->file('product_image');
            $filename = $file->getClientOriginalName();
            app('firebase.storage')->getBucket()->upload(fopen($request->product_image , 'r'), ['name' => 'images/' . $filename]);
            $productRef->set([
                'id'=>$id ,
                'name' => $request->name,
                'description' => $request->description,
                'price'    => $request->price,
                'created_at' => Carbon::now()->toDateTimeString(),
                'image' => "https://firebasestorage.googleapis.com/v0/b/restaurate-app.appspot.com/o/images%2F".$filename."?alt=media",
                'comment' => $request->comment
            ]);
        } else {
            $productRef->set([
                'id'=>$id ,
                'name' => $request->name,
                'description' => $request->description,
                'price'    => $request->price,
                'created_at' => Carbon::now()->toDateTimeString(),
                'image' => $emptyImageRef->data()['image'],
                'comment' => $request->comment
            ]);
        }

        $products = app('firebase.firestore')->database()->collection('Products')->documents();
        return redirect('/products');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        app('firebase.firestore')->database()->collection('Products')->document($id)->delete();
        return response()->json(["Message"=>"Eliminado"]);
    }
}
