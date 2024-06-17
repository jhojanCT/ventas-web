<?php
// a
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Exception;

class CategoryController extends Controller
{
    //
    public function index()
    {
        // dd(csrf_token());
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
      
       
        $category = new Category($request->all());
        // $category->name = $request->name;
        // $category->description = $request->description;
        // $category->status = $request->status;
        $category->save();
       
        return redirect()->route('categories.index');
       
      
       
       
       

    //    return  dd($request);
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }

    //reportes
    public function reporteCategoriaProductos(){
        $categories = Category::all();
        return view('reports.categories.index', compact('categories'));
    }
}




