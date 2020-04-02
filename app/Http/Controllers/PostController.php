<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    /**
     * Muestra todos los posts de un usuario  a traves de su id
     * @return View
     */
    public function index()
    {
        $posts = Post::where('user_id', '=', \Auth::id())->get();

        return view('post.show_all')->with(compact(['posts']));
    }

    /**
     * Funcion para guardar nuevos posts
     * @param Request $request
     * @return View
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->user_id      = \Auth::id();
        $post->titulo       = $request->titulo;
        $post->contenido    = $request->contenido;
        $post->save(); 

        return redirect('/user-posts');
    }


    /* 
     * Muestra un post en especifico
     * @param int 
    */
    public function show(int $post_id) 
    {
        $post = Post::find($post_id);

        return view('post.show')->with(compact(['post']));
    }

    /**
     * Actualiza un post
     * @param Request $request
     * @return Redirect
     */
    public function update(Request $request)
    {
        $post = Post::find($request->post_id);
        $post->titulo       = $request->titulo;
        $post->contenido    = $request->contenido;
        $post->save(); 

        return redirect('/user-posts');
    }

    /**
     * Elimina un Registro
     */
    public function delete(Request $request)
    {
        $post = Post::find($request->post_id);
        $post->delete();

        return redirect('/user-posts');
    }
}


