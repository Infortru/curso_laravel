<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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