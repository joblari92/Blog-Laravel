<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Category; /*Necesario para poder instanciar Category sin espeficicar toda la ruta*/

class CategoriesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $categories = Category::all(); /*Recuperará toda la información de la tabla categories*/
        return view('admin.categories.index', ['categories' => $categories]); /*Mediante el segundo apartado
 pasamos toda la información recuperada del la tabla categories a la vista*/
    }

    public function store(Request $request){

        $newCategory = new Category(); /*Instanciamos el modelo Category*/
        $newCategory->name = $request->name; /*Asignamos a la columna name de la tabla el valor metido en el formulario*/
        $newCategory->save();

        return redirect()->back();
    }

    public function update(Request $request, $categoryId){

        $category = Category::find($categoryId);/*Almacenamos en una variable el ID de la categoría que queremos
    modificar*/

        $category->name = $request->name; /*Sustituimos el name de la category que acabamos de recuperar por el nuevo
 que pasamos a través del formulario*/
        $category->save();

        return redirect()->back();
    }

    public function delete(Request $request, $categoryId){

        $category = Category::find($categoryId);/*Almacenamos en una variable el ID de la categoría que queremos
    eliminar*/
        $category->delete();
        return redirect()->back();
    }
}
