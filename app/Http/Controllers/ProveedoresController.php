<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
        
    public function createPost(Request $request)
    {
        $nameseller = $request->input('nameseller');
        $lastnameseller = $request->input('lastnameseller');
        $dirseller = $request->input('dirseller');
        $telseller = $request->input('telseller');
        $emailseller = $request->input('emailseller');
        $genderseller = $request->input('genderseller');
        $borndateseller = $request->input('borndateseller');
        $initdateseller = $request->input('initdateseller');
        $journalseller = $request->input('journalseller');

        $submit = DB::select('call Vendedor_Crear(?,?,?,?,?,?,?,?,?)',
                    array(  $nameseller, $lastnameseller, $dirseller, 
                            $telseller, $emailseller, $genderseller, 
                            $borndateseller, $initdateseller, $journalseller ));

        return redirect()->back()->with('success', 'Vendedor creada EXITOSAMENTE!');
    }

    public function listar()
    {
        $catalogoVendedores = DB::select('call Vendedor_Listar()',array());
        return view('vendedores.listar',["catalogoVendedores"=>$catalogoVendedores]);
    }

    public function editGet(int $cpk_vendedor)
    {
        $submit = DB::select('call Vendedor_Buscar_Por_Id(?)',array( $cpk_vendedor ));
        //dd($submit);
        return view('vendedores.editar',["vendedor"=>$submit[0]]);
    }

    public function editPost(Request $request)
    {
        $idseller       = $request->input('idseller');
        $nameseller     = $request->input('nameseller');
        $lastnameseller = $request->input('lastnameseller');
        $dirseller      = $request->input('dirseller');
        $telseller      = $request->input('telseller');
        $emailseller    = $request->input('emailseller');
        $journalseller  = $request->input('journalseller');

        $submit = DB::select('call Vendedor_Modificar(?,?,?,?,?,?,?)',array( 
            $idseller,
            $nameseller,
            $lastnameseller,
            $dirseller,
            $telseller,
            $emailseller,
            $journalseller
         ));
        if(count($submit)==0){
            return redirect('/vendedor/listar')->with('success',"Vendedor editado EXITOSAMENTE!");
        }else{
            return Redirect::back()->with('errors', json_encode($submit[0]));
        }
    }

    public function deleteGet(int $cpk_vendedor)
    {
        $submit = DB::select('call Vendedor_Eliminar(?)',array( $cpk_vendedor ));
        if(count($submit)==0){
            return redirect('/vendedor/listar')->with('delete',"Vendedor eliminado EXITOSAMENTE!");
        }else{
            return Redirect::back()->with('errors', json_encode($submit[0]));
        }
    }
}
