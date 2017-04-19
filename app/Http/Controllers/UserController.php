<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index(Request $request)
    {
       $users = User::all();
        return view('UserCRUD.index',compact('users'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'contact_num',
            'employee_id',
        ]);

        User::create($request->all());
        return redirect()->route('userCRUD.index')
                        ->with('success','User created successfully');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('UserCRUD.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('UserCRUD.show',compact('user'));
    }

    public function getHeadPage()
    {
        return view('head');
    }

    public function getAdminPage()
    {
        $users = User::all();
        return view('view_all_users', ['users' => $users]);
    }

    public function getGenerateArticle()
    {
        return response('Article generated!', 200);
    }

    public function postAdminAssignRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        
        $user->roles()->detach();
        if ($request['role_user']) {
            $user->roles()->attach(Role::where('name', 'User')->first());
        }
        if ($request['role_head']) {
            $user->roles()->attach(Role::where('name', 'Head')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        return redirect()->back();
    }
}