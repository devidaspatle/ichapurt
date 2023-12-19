<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
    public function index()
    {
        $categories = Category::all();
        return view('categories.index',compact('categories'));
        
        
    }

    public function create()
    {
        $categories = Category::all();
        return view('categories.create')->with(compact('categories'));
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'catName'=>'required',
            'catTime'=>'required',
            'catoutTime'=>'required' 
        ]);
        $formInput=$request->all();
        Category::create($formInput);
        return redirect()->route('categories.index')->with('message','Category added successfully.');
    }

    public function show(Category $category)
    {
        //
    }

 
    public function edit($id)
    {
        $categories = Category::find($id);
       
        return view('categories.edit', compact('categories'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'catName' => 'required',
            'catTime'  => 'required',
            'catoutTime'  => 'required'
          ]);

        $categories = Category::find($id);
        $categories->catName = $request->get('catName');
        $categories->catTime = $request->get('catTime');
        $categories->catoutTime = $request->get('catoutTime');
       
        $categories->save();
        return redirect('/categories')->with('success', 'Category has been updated Successfully');
    }

    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect('/categories')->with('success', 'Category has been deleted Successfully');
    }
}
