<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category; 

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
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
            'status' => 'required|boolean',
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
        $categories = Category::all(); 
        $article = Article::find($id);
        return view('articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'code' => 'required',
            'name' => 'required',
            'sale_price' => 'required|numeric',
            'stock' => 'required|integer',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
        ]);
    

        $article = Article::findOrFail($id);
    

        $article->category_id = $request->category_id;
        $article->code = $request->code;
        $article->name = $request->name;
        $article->sale_price = $request->sale_price;
        $article->stock = $request->stock;
        $article->description = $request->description;
        $article->status = $request->has('status') ? 1 : 0;
    

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/articles'), $imageName);
            $article->image = $imageName;
        }

        $article->save();
    
        return redirect()->route('articles.index')->with('');
    }
    

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }
}
