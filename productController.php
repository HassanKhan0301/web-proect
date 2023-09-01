<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\add;

class productController extends Controller
{
    public function  index()
    {
        $product = product::all();
        return view('admin.product.indext',compact('product'));
    }
    public function add()
    {
        $add = add::all();
        return view('admin.product.add',compact('add'));
    }
    public function insert(Request $request)
    {
        $product = new product();
        if($request->hasFile('image'))
        {
            $destination= 'public/image';

            $image= $request->file('image');

            $img ='IMG-'.time().'-'.
            $image->getClientOriginalName();

            $path =
            $image->storeAs($destination,$img);

            $product->image =$img;
        }
        $product->cat_id=$request->input('cat_id');
        $product->name=$request->input('name');
        $product->slug=$request->input('slug');
        $product->samll_descrip=$request->input('samll_descrip');
        $product->description=$request->input('description');
        $product->origninal_price=$request->input('origninal_price');
        $product->selling_price=$request->input('selling_price');
        
        $product->qty=$request->input('qty');
        
        $product->tax=$request->input('tax');
        
       
        
        $product->meta_title=$request->input('meta_title');
        
        $product->meta_keywords=$request->input('meta_keywords');
        
        $product->meta_discrip=$request->input('meta_discrip');
        $product->save();
        return redirect('product')->with('status',"Product Add Succesfully");
    
    }

    public function edit($id)
{
    $product =  product::find($id);
    return view('admin.product.edit',compact('product'));
}

public function update(Request $request ,$id)
{
    $product = product::find($id);
    if($request->hasFile('image'))
    {
        $destination= 'public/image';

        $image= $request->file('image');

        $img ='IMG-'.time().'-'.
        $image->getClientOriginalName();

        $path =
        $image->storeAs($destination,$img);

        $product->image =$img;
    }
    
    $product->name=$request->input('name');
    $product->slug=$request->input('slug');
    $product->samll_descrip=$request->input('samll_descrip');
    $product->description=$request->input('description');
    $product->origninal_price=$request->input('origninal_price');
    $product->selling_price=$request->input('selling_price');
    
    $product->qty=$request->input('qty');
    
    $product->tax=$request->input('tax');
    
   
    
    $product->meta_title=$request->input('meta_title');
    
    $product->meta_keywords=$request->input('meta_keywords');
    
    $product->meta_discrip=$request->input('meta_discrip');
    $product->save();
    return redirect('product')->with('status',"Product Update Succesfully");
}
public function del($id)
{
    $product = add::find($id);
    
   
    $product->delete();
    return redirect('dashboard')->with('status',"cateofrie delteed ");
   

}
}