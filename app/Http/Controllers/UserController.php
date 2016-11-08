<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\AddUserRequest;
use App\User;
use Carbon\Carbon;
use Hash;
use Illuminate\Http\Request;
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

    	$password = Hash::make(str_random(8));
        $user = User::create([
        	'name' => $request->input('name'),
        	'email' => $request->input('email'),
        	'password' => $password,
        ]);
        $user->tools()->attach($tool->id);
        $user->assignRole($request->input('role'));

        return redirect('admin/users')->with('status', ['type'=>'success','message'=>'User Created']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Tracker
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,Request $request)
    {
        //$user->destroy();
        if($request->ajax()){
            $data = [
                'result'=>'success'
            ];
            return $data;
        }
        return redirect('/admin/trackers')->with('status', 'Insufficient Privilages!');
    }
}
