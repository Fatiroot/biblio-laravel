<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::with('role')->get();
        return view('admin.user.index',compact('users'));
    
    }
    public function destroy(User $user)
{
    $user->delete();

    return redirect()->route('users.index');
}
}
