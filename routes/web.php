<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Post;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);

Route::get("/posts/create", [PostController::class, 'create']);

Route::get("/posts/{post}", [PostController::class, 'show']);


Route::get("/posts/{post}/{category?}", function ($post, $category=null){       //Ruta con contenido variable, entre llaves definimos la ruta
                                                                                //variable y le pasamos la ruta a la función. El segundo
        if($category){                                                          //parámetro es opcional y hay que asignarle el valor "null"
            return "Aquí se muestra el post de {$post} de la categoría {$category}";
        }else{
            return "Aquí se muestra el post de {$post}";
        }

});

/************Tipos de peticiones******************/

//get -> A través de la URL
//post -> A través de un formulario, oculta los datos
//put -> Tipo post para actualizar algún registro
//patch -> Tipo post para actualizar algún registro
//delete -> Tipo post para borrar algún registro

route::get("prueba", function(){

    $post = new Post;

    /* Crear un nuevo post

    $post->titulo = "TíTUlo de prUEba 4";
    $post->contenido = "Contenido de prueba 4";
    $post->categoria = "Categoría de prueba 4";

    $post->save();

    return $post;

    /*Actualizar un registro: por id
*/
    $post = Post::find(1)->publicado_el->format("d/m/Y");

    return $post;

    /*

    Actualizar un registro indicando un campo


    $post = Post::where("titulo", "Título de prueba 1")->first();

    $post->categoria = "Desarrollo web";    //Cambia el registro de categoría con el titulo = Título de prueba 1

    $post->save();

    return $post;

    $post = Post::all();  $post = Post::get();        Recupera todos los registros de la tabla

    $post = Post::where("id", ">=", "2") -> get();    Recupera los registros que cumplan una condición p.e. "id>=2"


    $post = Post::orderBy("id", "desc")                 //Definimos el orden
                ->select("id", "titulo", "contenido")   //Seleccionamos los campos que queremos que nos devuelva la consulta
                ->take(2)                               //Cantidad de registros que queremos, en este caso 2
                ->get();                                //Siempre debemos ejecutar el método get()
    return $post;

    Eliminar un registro

    $post = Post::find(1);                               //Buscamos el registro que queremos eliminar

    $post->delete();                                     //Ele método delete() lo elimina

    return "Se ha eliminado el registro correctamente";

    */
});
