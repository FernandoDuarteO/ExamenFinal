<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = Post::with('category')->paginate(10);
        return view('examples.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $post = new Post();
        $categories = Category::all();
        return view('examples.posts.create', compact('post', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request): RedirectResponse
    {
        Post::create($request->validated() + [
            'slug' => Str::slug($request->title, '-')
        ]);
        return redirect()->route('posts.index')->with('success', 'Post creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): View
    {
        $post->load('category');
        return view('examples.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post): View
    {
        $categories = Category::all();
        return view('examples.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post): RedirectResponse
    {
        $post->update($request->validated() + [
            'slug' => Str::slug($request->title, '-')
        ]);
        return redirect()->route('posts.index')->with('updated', 'Post actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): RedirectResponse
    {
        Post::find($id)->delete();
        return redirect()->route('posts.index')->with('deleted', 'Post eliminado Correctamente');
    }
}
