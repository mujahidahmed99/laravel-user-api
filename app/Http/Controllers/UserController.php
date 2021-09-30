<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $result = DB::table('users')
        // ->leftjoin('handsets', 'users.handset_id', '=', 'handsets.id')
        // ->select('users.id as id','users.name as name', 'users.phone_number as phone_number', 'handsets.type as handset_type')
        // ->get();
        // return $result;

        foreach (User::all() as $user)
        {
            return $user::with('handset')->get();
        }
        // return User::with('handset')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'handset_id' => 'required|exists:handsets,id',
        ]);

        return User::Create($request->all());
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return User::destroy($id);
    }
}
