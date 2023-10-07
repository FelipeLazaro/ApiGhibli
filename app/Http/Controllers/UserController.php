<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a list of users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $users = User::all();
        return response()->json(compact('users'));

    }

    /**
     * Create a User
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        $user = new User;
        $user->name = $request->name;
        $user->rol = $request->rol;
        
        $user->save();

        $data =[
            'message' => 'Successfully created user',
            'user' => $user
        ];
        return response()->json($data);
    }

    /**
     * Show a user
     * 
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //return response()->json(compact('user'));
        $user = User::find($id);
        return response()->json(compact('user'));


    }

    /**
     * Update a user
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, Request $request) {
        $user = $user->update($request->all());
        $data =[
            'message' => 'Successfully update user',
            'user' => $user
        ];

        return response()->json(compact('data'));

    }

    /**
     * Delete a user
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user) {
        $user->delete();
        return response()->json(compact('user'));

    }
}
