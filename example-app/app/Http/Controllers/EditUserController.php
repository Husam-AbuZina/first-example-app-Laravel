<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EditUserController extends Controller
{

    public function edit($id){
        $find = User::find($id);  //MyVariable name = MyModelName::find($VariableINeedToReturn)
        return view('edit', ['user'=>$find]);  //view('viewName', ['anyNameWillBeReievedToTheView=>$MyVariableName'])
    }

    public function update(Request $request, $id){
        $find = User::find($id);
        $find-> name = $request->name;
        $find->phone = $request->phone;
        $find->email = $request->email;

        if($find->save()){
            return redirect()->action([HomeController::class, 'index'])->with('message', 'edit successful');
        }
    }

    // public function delete($id){
    //     $user = User::find($id);

    //     if($user){
    //         $user->delete();
    //         return redirect()->action([HomeController::class, 'index'])->with('message', 'Delete succesful');
    //     }
    //     else{
    //         return redirect()->action([HomeController::class, 'index'])->with('message', 'User not found');
    //     }
    // }

}


//find->name erqrest = name();
