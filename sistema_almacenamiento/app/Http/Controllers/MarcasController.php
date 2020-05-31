<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;

class MarcasController extends Controller
{

    public function createPost(Request $request)
    {
        $namebrand = $request->input('namebrand');
        $country = $request->input('country');
        $webpage = $request->input('webpage');
        $submit = DB::select('call Marca_Crear(?,?,?)',array($namebrand, $country, $webpage));
        return redirect()->back()->with('success', 'Marca creada EXITOSAMENTE!');
    }

    public function listar()
    {
        $catalogoMarcas = DB::select('call Marca_Listar()',array());
        return view('marcas.listar',["catalogoMarcas"=>$catalogoMarcas]);
    }
    
    public function editGet(int $cpk_marca)
    {
        $submit = DB::select('call Marca_Buscar_Por_Id(?)',array( $cpk_marca ));
        return view('marcas.editar',["marca"=>$submit[0]]);
    }

    public function editPost(Request $request)
    {
        $idbrand = $request->input('idbrand');
        $namebrand = $request->input('namebrand');
        $country = $request->input('country');
        $webpage = $request->input('webpage');
        $submit = DB::select('call Marca_Modificar(?,?,?,?)',array( $idbrand, $namebrand, $country, $webpage ));
        if(count($submit)==0){
            return redirect('/marca/listar')->with('success',"Marca editada EXITOSAMENTE!");
        }else{
            return Redirect::back()->with('errors', json_encode($submit[0]));
        }
    }
    
    public function deleteGet(int $cpk_marca)
    {
        $submit = DB::select('call Marca_Eliminar(?)',array( $cpk_marca ));
        if(count($submit)==0){
            return redirect('/marca/listar')->with('delete',"Marca eliminada EXITOSAMENTE!");
        }else{
            return Redirect::back()->with('errors', json_encode($submit[0]));
        }
    }


}
