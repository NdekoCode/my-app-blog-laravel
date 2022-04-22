<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(12);
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['title' => ['required', 'min:3'], 'body' => ['required', 'min:10']]);
        $rand = rand(0, 1000);
        Post::create(['title' => $request->title, 'body' => $request->body, 'user_id' => auth()->user()->id, 'image_desc_small' => "https://picsum.photos/id/" . $rand . "/500/700", 'image_desc_big' => "https://picsum.photos/id/" . $rand . "/1000/1400"]);
        return redirect('/posts')->with('success', 'Votre article a bien été créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('id', $id)->firstOrFail();
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id', $id)->firstOrFail();
        if (auth()->user()->id === $post->user_id) {

            return view('posts.edit', ['post' => $post]);
        }
        return redirect('/home')->with('error', "Vous n'etes pas autorisés");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate(['title' => ['required', 'min:3'], 'body' => ['required', 'min:10']]);
        $post = Post::find($id);
        if (auth()->user()->id === $post->user_id) {

            $post->update(['title' => $request->title, 'body' => $request->body]);
            return redirect('/posts')->with('success', 'Votre article a bien été modifier');
        }
        return redirect('home')->with('error', "Vous n'etes pas autorisés");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if (auth()->user()->id === $post->user_id) {

            $post->delete();
            return redirect('/posts')->with('success', 'Article supprimer avec succées');
        }

        return redirect('home')->with('errors', "Vous n'etes pas autorisés");
    }
}
