<?php

namespace App\Http\Controllers;
use app\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AddUserController extends Controller
{

// public function create(Request $request)
//     {
//         $userData=new User();
//         $userData->name = $request->name;
//         $userData->phone = $request->phone;
//         $userData->role = $request->role;
//         $userData->email = "lara@gmail.com";
//         $userData->password = Hash::make(123456789);

//         if($userData->save()){
//             return redirect()->back()->with('message', 'add succsessful');
//         } //ERROR ??
//     }

    public function add()
    {
        return view('add');
    }

    public function create(Request $request){
        //return $request;
        $userData = new User(); // [Chcek ME!]  intiate something
        $userData->name = $request->name;
        $userData->phone = $request->phopne;
        $userData->role = $request->role;
        $userData->email = "husam@gmail.com";
        $userData->password = Hash::make(123456789);

        if($userData->save()){
            return redirect()->action([HomeController::class, 'index'])->with('message', 'add successful');
        }
    }

    public function delete($id){
        $user = User::find($id);

        if($user){
            $user->delete();
            return redirect()->action([HomeController::class, 'index'])->with('message', 'Delete succesful');
        }
        else{
            return redirect()->action([HomeController::class, 'index'])->with('message', 'User not found');
        }
    }


}
