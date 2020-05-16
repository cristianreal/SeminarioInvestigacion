<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendedoresController extends Controller
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

        $submit = DB::select('call Marca_Crear(?,?,?,?,?,?,?,?,?)',
                    array(  $nameseller, $lastnameseller, $dirseller, 
                            $telseller, $emailseller, $genderseller, 
                            $borndateseller, $initdateseller, $journalseller ));

        return redirect()->back()->with('success', 'Vendedor creada EXITOSAMENTE!');
    }
}
