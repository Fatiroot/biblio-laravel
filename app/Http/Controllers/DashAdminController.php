<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashAdminController extends Controller
{
   
        public function index(){
           
            $userCount = User::count();
            $resCount = Reservation::count();
            $bookCount = Book::count();
            return view('partials.dashboard', compact('bookCount','reservationCount','userCount'));
        }
  
}
