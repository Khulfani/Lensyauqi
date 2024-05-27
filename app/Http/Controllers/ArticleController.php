<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.dashboard', compact('articles'));
    }

    public function article()
    {
        $articles = Article::all();
        return view('admin.article', compact('articles'));
    }

    public function create()
    {
        return view('admin.input');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.edit', compact('article'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|max:1024'
        ]);

        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;

        if ($request->hasFile('image')) {
            $filename = $request->file('image')->store('uploads/article', 'public');
            $article->image = $filename;
        }

        $article->save();

        return redirect()->back()->with('message', 'Berhasil Menambah Artikel');
    }



    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $filename = $request->file('image')->store('uploads/article', 'public');

        $article->title = $request->title;
        $article->content = $request->content;
        $article->image = $filename;

        $article->save();

        return redirect()->back()->with('message', 'Berhasil Update Artikel');
    }

    public function destroy($id)
    {

        $article = Article::findOrFail($id);

        if ($article->image) {
            $destination = public_path("storage/uploads/article");
            $imagePath = $destination . '/' . $article->image;

            if (File::exists($imagePath)) {
                if (!File::delete($imagePath)) {
                    return response()->json(['error' => 'Gagal menghapus file gambar'], 500);
                }
            }
        }

        $article->delete();

        return redirect()->back()->with('message', 'Berhasil Hapus Artikel');
    }
}
