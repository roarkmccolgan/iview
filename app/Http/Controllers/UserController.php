<?php

namespace App\Http\Controllers;

use App\Events\UserWasCreated;
use App\Http\Requests;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\User;
use Carbon\Carbon;
use Event;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JavaScript;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	$user = $request->user();
        $user->load(['roles']);

        $tool = $request->get('product');

        if(($user->tools->contains($tool->id) && ($user->hasRole('admin') || $user->hasRole('client'))) || $user->hasRole('super')){
        	$tool->load(['users','company','urls']);
        	foreach($tool->users as $user) {
        		$user->load(['roles']);
        	}

        	$data = [
	            'tool' => $tool
	        ];
            
            JavaScript::put([
                'foo' => 'bar'
            ]);
            return view('admin.users', $data);
        }
        return redirect('/login')->with('status', 'Insufficient Privilages!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    	$tool = $request->get('product');
    	$tool->load(['company']);

    	$user = $request->user();
        $user->load(['roles']);

        $roles=[
        		'local'
        	];
    	if($user->hasRole('super') || $user->hasRole('admin') || $user->hasRole('client')) $roles[] = 'client';
    	if($user->hasRole('super') || $user->hasRole('admin')) $roles[] = 'admin';
    	if($user->hasRole('super')) $roles[] = 'super';
    	$data = [
    		'tool' => $tool,
    		'roles' => $roles,
    	];
        return view('admin.users_new', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddUserRequest $request)
    {
        $tool = $request->get('product');
        $url = $tool->urls->first();

    	$password = Hash::make(str_random(8));
        $user = User::create([
        	'name' => $request->input('name'),
        	'email' => $request->input('email'),
        	'password' => $password,
        ]);
        $user->tools()->attach($tool->id);
        $user->assignRole($request->input('role'));

        if(config('terminal.settings.resetpassword_at_first_login')){
            $register_token = $code = str_random(10);
            $user->register_token = $register_token;
        }else{
            $user->changePassword = 0;
        }
        $user->save();
        Event::fire(new UserWasCreated($user,$tool,$url));

        return redirect('admin/users')->with('status', ['type'=>'success','message'=>'User Created']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\User
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($subdomain, User $user,Request $request)
    {
        $user->delete();
        if($request->ajax()){
            $data = [
                'result'=>'success'
            ];
            return $data;
        }
        return redirect('/admin/users')->with('status', 'User Deleted');
    }

    /**
     * Show the form for changing resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showChangePassword(Request $request)
    {
        //return $request->user();
        $register_token = $request->get('register_token');
        if($register_token!=null){
            $user = User::where('register_token',$register_token)->firstOrFail();

            $data = [
                'user' => $user,
                'register_token' => $register_token,
            ];
            return view('auth.change_password', $data);
        }
        abort('403');
    }

    /**
     * Store a newly changed resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeChangePassword(ChangePasswordRequest $request)
    {
        //return $request->input('register_token');
        //return $request->user();
        
        if($request->input('register_token')!=null){
            $newPass = $request->input('password');
            $user = User::where('register_token',$request->input('register_token'))->firstOrFail();

            //return $user;

            $password = Hash::make($newPass);

            $user->password = $password;
            $user->changePassword = 0;
            $user->register_token = null;
            $user->save();

            $user->load(['tools']);
            $redirect = '';
            foreach ($user->tools as $tool) {
                $tool->load(['company','urls']);

                $redirect = 'http://'.$tool->urls->first()->subdomain.'.'.$tool->urls->first()->domain.'/admin';
            }
            return redirect($redirect);

            /*//$this->authenticate($user->email,$newPass,$redirect);
            if (Auth::attempt(['email' => $user->email, 'password' => $newPass])) {
                //return Auth::user();
                return redirect($redirect);
            }
            abort('403');*/
        }

    }


    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    private function authenticate($email, $password, $redirect)
    {
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect($redirect);
        }
        abort('403');
    }
}
