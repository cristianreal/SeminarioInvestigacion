<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;

class ProveedoresController extends Controller
{
        
    public function createPost(Request $request)
    {
        $namebuyer = $request->input('namebuyer');
        $lastnamebuyer = $request->input('lastnamebuyer');
        $dirbuyer = $request->input('dirbuyer');
        $telbuyer = $request->input('telbuyer');
        $emailbuyer = $request->input('emailbuyer');
        $genderbuyer = $request->input('genderbuyer');
        $webpage = $request->input('webpage');
        $country = $request->input('country');
        $city = $request->input('city');

        $submit = DB::select('call Proveedor_Crear(?,?,?,?,?,?,?,?,?)',
                    array(  $namebuyer, $lastnamebuyer, $dirbuyer, 
                            $telbuyer, $emailbuyer, $genderbuyer, 
                            $webpage, $country, $city ));

        return redirect()->back()->with('success', 'Proveedor creado EXITOSAMENTE!');
    }

    public function listar()
    {
        $catalogoProveedores = DB::select('call Proveedor_Listar()',array());
        return view('proveedores.listar',["catalogoProveedores"=>$catalogoProveedores]);
    }

    public function editGet(int $cpk_proveedor)
    {
        $submit = DB::select('call Proveedor_Buscar_Por_Id(?)',array( $cpk_proveedor ));
        //dd($submit);
        return view('proveedores.editar',["proveedor"=>$submit[0]]);
    }

    public function editPost(Request $request)
    {
        $idbuyer       = $request->input('idbuyer');
        $namebuyer     = $request->input('namebuyer');
        $lastnamebuyer = $request->input('lastnamebuyer');
        $dirbuyer      = $request->input('dirbuyer');
        $telbuyer      = $request->input('telbuyer');
        $emailbuyer    = $request->input('emailbuyer');
        $webpage  = $request->input('webpage');
        $country  = $request->input('country');
        $city     = $request->input('city');

        $submit = DB::select('call Proveedor_Modificar(?,?,?,?,?,?,?,?,?)',array( 
            $idbuyer,
            $namebuyer,
            $lastnamebuyer,
            $dirbuyer,
            $telbuyer,
            $emailbuyer,
            $webpage,
            $country,
            $city
         ));
        if(count($submit)==0){
            return redirect('/proveedor/listar')->with('success',"Proveedor editado EXITOSAMENTE!");
        }else{
            return Redirect::back()->with('errors', json_encode($submit[0]));
        }
    }

    public function deleteGet(int $cpk_proveedor)
    {
        $submit = DB::select('call Proveedor_Eliminar(?)',array( $cpk_proveedor ));
        if(count($submit)==0){
            return redirect('/proveedor/listar')->with('delete',"Proveedor eliminado EXITOSAMENTE!");
        }else{
            return Redirect::back()->with('errors', json_encode($submit[0]));
        }
    }
}
