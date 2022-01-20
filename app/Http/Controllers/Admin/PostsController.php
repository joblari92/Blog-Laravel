<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Models\Category;
use App\Models\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $posts = Post::all(); //Recuperará toda la información de la tabla posts
        $categories = Category::all(); //Recuperará toda la información de la tabla categories
        return view('admin.posts.index', [
            'posts' => $posts,
            'categories' => $categories
        ]); //Mediante el segundo apartado pasamos toda la información recuperada de la tabla posts a la vista
    }

    public function store(Request $request){

        $newPost = new Post(); //Instanciamos el modelo post



        //Almacenamos la imagen en una variable
        //$imagenes = $request->file('featured')->store('public/imagenes'); //Redirigimos la imagen de la carpeta temporal a la carpeta
        //correspondiente dentro de storage, y con el comando php artisan storage:link, creamos un acceso directo en public a dicha carpeta

        //$url = Storage::url($imagenes); //Almacenamos la url de la imagen

        if($request->hasFile('featured')){ //Comprobamos si en el formulario hay imagen cargada
            $validated = $request->validate([
                'featured' => 'image',
            ]);
            $imagenes = $request->file('featured')->store('public/imagenes'); //Redirigimos la imagen de la carpeta temporal a la carpeta
            //correspondiente dentro de storage, y con el comando php artisan storage:link, creamos un acceso directo en public a dicha carpeta
            $url = Storage::url($imagenes); //Almacenamos la url de la imagen
            $newPost->featured = $url;
            //return $url;

        }
        $newPost->title = $request->title; //Asignamos a la columna name de la tabla el valor metido en el formulario
        $newPost->category_id = $request->category_id; //Asignamos a la columna name de la tabla el valor metido en el formulario
        $newPost->content = $request->contenido; //Asignamos a la columna name de la tabla el valor metido en el formulario
        $newPost->author = $request->author; //Asignamos a la columna name de la tabla el valor metido en el formulario

        $newPost->save();

        return redirect()->back();
    }

    public function update(Request $request, $postId){

        $post = Post::find($postId);//Almacenamos en una variable el ID de la post que queremos modificar

        $post->title = $request->title; //Sustituimos el name de la post que acabamos de recuperar por el nuevo
 //que pasamos a través del formulario
        $post->save();

        return redirect()->back();
    }

    public function delete(Request $request, $postId){

        $post = Post::find($postId);//Almacenamos en una variable el ID de la post que queremos eliminar
        $post->delete();
        return redirect()->back();
    }
}
