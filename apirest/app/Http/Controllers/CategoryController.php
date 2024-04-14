<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function getCategory(){
        return response()->json(Category::all(),200);
    }
    public function getCategoryId($id){
        $categoria = Category::find($id);
        if (is_null($categoria)) {
            return response()->json(['Mensaje','Registro no encontrado'],200);
        }
        return response()->json(Category::find($id),200);
    }
    //Agregar una categoria
    public function insertCategory(Request $request){
        $categoria = Category::create($request->all());
        return response($categoria,200);
    }
    //Actualizar una categoria
  public function updateCategory(Request $request, $id){
    $categoria = Category::find($id);
    if (is_null($categoria)){
        return response ()->json(['Mensaje','Registro no encontrado'],200);
    }
    $categoria = Category::update($request->all());
    return response($categoria,200);
  }

  //Eliminar una Categoria
  public function delateCategory ($id){
   $categoria =Category::find($id);
   if(is_null($categoria)){
    return response()->json(['Mensaje:', 'Mensaje no encontrado'],200);
   }
   $categoria ->delate ();
   return response() ->json (['Mensaje', 'Registro eliminado son exito'],200);
  }

}