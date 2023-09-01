<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\add;
use session;

class addController extends Controller
{
    public function index()
    {
        $add = add::all();
        return view('admin.catogrey.index',compact('add'));
    }

    public function add()
    {
        
        return view('admin.catogrey.add');
    }
    public function insert(Request $request)
    {
        $add = new add();
        if($request->hasFile('image'))
        {
            $destination='public/image';
            $image =$request->file('image');
            $img ='IMG-'.time().'-'.
            $image->getClientOriginalName();
            $path= $image->storeAs($destination,$img);
            $add->image=$img;
          
        }
        $add->name=$request->input('name');
        $add->slug=$request->input('slug');
        $add->description=$request->input('description');
        $add->status=$request->input('status')==TRUE ? '1' :'0';
        $add->popular=$request->input('popular')==TRUE ? '1' :'0';
        $add->meta_title=$request->input('meta_title');
        $add->meta_descrip=$request->input('meta_descrip');
        $add->meta_keywords=$request->input('meta_keywords');
        $add->save();
        return redirect('/dashboard')->with('status',"cata upload succcesfully");




    }
    public function edit($id)
    {
        $add  = add::find($id);
        return view('admin.catogrey.edit',compact('add'));
    }


   public function update(Request $request, $id)
 
 
   {
    
    $add =  add::find($id);
    if($request->hasFile('image'))
    {
        $destination='public/image';
        $image=$request->file('image');
        $img='IMG-'.time().'-'.
        $image->getClientOriginalName();
        $path = $image->storeAs($destination,$img);
        $add->image =$img;


        $add->name=$request->input('name');
        $add->slug=$request->input('slug');
        $add->description=$request->input('description');
        $add->status=$request->input('status')==TRUE ? '1' :'0';
        $add->popular=$request->input('popular')==TRUE ? '1' :'0';
        $add->meta_title=$request->input('meta_title');
        $add->meta_descrip=$request->input('meta_descrip');
        $add->meta_keywords=$request->input('meta_keywords');
        $add->save();
        return redirect('/dashboard')->with('status',"cata upload succcesfully");
    }
    
   }
   public function del($id)
    {
        $add = add::find($id);
        
       
        $add->delete();
        return redirect('dashboard')->with('status',"cateofrie delteed ");
       

    }
    
}
