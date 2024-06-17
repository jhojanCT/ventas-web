<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category; // Asegúrate de importar el modelo Category si aún no lo has hecho

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all(); // Obtener todas las categorías para el formulario de creación
        return view('articles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'code' => 'required',
            'name' => 'required',
            'sale_price' => 'required|numeric',
            'stock' => 'required|integer',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'nullable',
            
        ]);

        // Procesar carga de imagen si se proporciona
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/articles'), $imageName);
            $validatedData['image'] = $imageName;
        }

        Article::create($validatedData);

        return redirect()->route('articles.index');
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function edit($id)
    {
        $categories = Category::all(); // Obtener todas las categorías para el formulario de edición
        $article = Article::find($id);
        return view('articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'code' => 'required',
            'name' => 'required',
            'sale_price' => 'required|numeric',
            'stock' => 'required|integer',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'nullable',
        ]);
        // dd($request->all());
        // Procesar carga de imagen si se proporciona
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/articles'), $imageName);
            $validatedData['image'] = $imageName;
        }

        $article = Article::find($id);
        $article->update($validatedData);
        
        return redirect()->route('articles.index');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }
}