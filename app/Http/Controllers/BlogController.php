<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $posts = Post::with('user','tags')->get();
         info($posts);
        return view('Blogs.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'tags' => 'required',
        ]);

        $post = Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'user_id' => auth()->user()->id, // Assign the currently logged-in user's ID
        ]);

        // Retrieve or create tags
        $tagNames = explode(',', $request->input('tags'));

        $tagIds = [];

        foreach ($tagNames as $tagName) {
            $tag = Tag::firstOrCreate(['name' => trim($tagName)]);
            $tagIds[] = $tag->id;
        }

        // Attach tags to the post
        $post->tags()->attach($tagIds);

        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $posts)
    {
        $posts = Post::with('user','tags')->where('id',$posts->id)->first();
        return view('Blogs.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
