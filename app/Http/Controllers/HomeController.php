<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Convivencia;
use App\Models\LocalConvivencia;
use App\Models\Membro;
use Illuminate\Support\Facades\Redirect;
use Hash;
use Auth;
use Flash;
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
        $convivencia = Convivencia::where('is_ativo', '1')->orderby('dt_inicio')->first();
        $local = new LocalConvivencia;
        return view('home')->with('convivencia', $convivencia)->with('local', $local);
    }

    public function showChangePasswordForm(){
        return view('auth.changepassword');
    }


    public function changePassword(Request $request){
 
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","A senha digitada não corresponde à senha atual. Entre com ela novamente.");
        }
 
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Sua nova senha não pode ser igual à senha atual. Por favor, escolha uma nova senha.");
        }
 
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
 
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        Flash::success('Senha alterada com sucesso!!!');
        //return Redirect::to('home')->with("success","Senha alterada com sucesso!!!");
        return redirect('home');
 
    }


    /*
    public function someAdminStuff(Request $request)
      {
        $request->user()->authorizeRoles('manager');
        return view(‘some.view’);
      }
  */
}