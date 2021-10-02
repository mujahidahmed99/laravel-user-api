<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function read()
    {
        // shows all users
        return User::with('handset')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        if($user == null)
        {
            $returnData = array(
                'status' => 'error',
                'message' => 'User does not exist!'
            );
            return Response::json($returnData, 500);
        }
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
