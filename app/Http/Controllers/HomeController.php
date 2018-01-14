<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Convivencia;
use App\Models\LocalConvivencia;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$request->user()->authorizeRoles(['admin', 'responsavel', 'usuario']);
        $convivencia = new Convivencia;
        $convivencia = Convivencia::where('is_ativo', '1')->first();
        $local = new LocalConvivencia;
        //print_r($convivencia);
        //echo $convivencia->no_nome;
        return view('home')->with('convivencia', $convivencia)->with('local', $local);
    }

    /*
    public function someAdminStuff(Request $request)
      {
        $request->user()->authorizeRoles('manager');
        return view(‘some.view’);
      }
  */
}
