<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(){
        $reservation = Reservation::all();
        return view('admin.reservation.index',['reservations'=>$reservation]);
    }
    // public function create(){
    //     $user = User::all();
    //     $book = Book::all();
    //     return view('admin.reservation.create');
    // }
   
}
