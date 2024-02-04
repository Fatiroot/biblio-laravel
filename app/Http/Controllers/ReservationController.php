<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Exception;

class ReservationController extends Controller
{
    public function index(){
        $reservations = Reservation::all();
        return view('admin.reservation.index',compact('reservations'));
    }
    // public function show(){
    //     $books = Book::all();
    //     $userReservations = Auth::user()->reservations ?? [];
    //     return view('home', compact('home', 'userReservations'));

    // }
    public function create(Book $book)
    {

        return view('create_reservation',[ 'book'=>$book]);
    }
    
    public function store(Request $request){ 
        $validatedData = $request->validate([
            'reservation_date'=> ['required'],
            'return_date'=> ['required'],
            'description'=> ['required'],
            
        ]);
        DB::beginTransaction();
            try{
            $reservation = Reservation::create($request->all());
            $book = $reservation->book;
            $book->decrement('available_copies');
            $userAuth = Auth::user();
            DB::commit();
            return view('/home', compact('book','userAuth'));

        }
        catch(Exception $e){
            DB::rollBack();
        }
        
    }

    // public function store(Request $request)
    // {
    
    //     $book = Book::findOrFail($request->bookId);
    
    //     $reservation=Reservation::create([
    //         'description' => 'reserved',
    //         'reservation_date'=>'22-33-4990',
    //         'return_date' => $request->returnDate,
    //         'is_returned'=>0,
    //         'user_id' => Auth::user()->id,
    //         'book_id' => $book->id,
            
    //     ]);   
    //     $book->decrement('available_copies');
    
    //     return redirect()->back()->with('success', 'Reservation successful!')->with('delay', 1000);
    // }


 
}
