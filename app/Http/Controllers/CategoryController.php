<?php
// a
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Exception;
use Illuminate\Database\QueryException;

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
        Category::all();
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:75',
            'description' => 'required',
            
        ]);
       
        $category = new Category($request->all());
        $category->name = $request->name;
        $category->description = $request->description;
        $category->status = $request->status;
        $category->save();
       
        return redirect()->route('categories.index');
       
      
       
       
       

    //    return  dd($request);
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|min:3|max:75',
            'description' => 'required',
            
            
        ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->status = $request->status;
       
        $category->save();
        
        return redirect()->route('categories.index');
    }

    public function destroy(string $id)
    { 
      
        try {
            $category = Category::findOrFail($id);
            $category->delete();
            
            
            return redirect()->route('categories.index')->with('success', 'Categoría eliminada correctamente');
        } catch (QueryException $e) {
            
            $errorMessage = 'No se puede eliminar debido a todavia hay articulos dentro de esta categoria';
            
            return redirect()->route('categories.index')->with([
                'error' => $errorMessage,
                'id' => $id, 
            ]);
        }
    }

    //reportes
    public function reporteCategoriaProductos(){
        
        $categories = Category::all();
        return view('reports.categories.index', compact('categories'));
    }
}




