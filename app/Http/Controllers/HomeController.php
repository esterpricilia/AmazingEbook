<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Cart;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Book::all();
        return view('home', compact('data'));
    }
    public function detailBook($id)
    {
        $data = Book::where('id', $id)->get();
        return view('detailBook', compact('data'));

    }
    public function cart($id)
    {
        $data = Cart::where('user_id', $id)->get();
        return view('cart', compact('data'));
    }
    public function storeCart(Request $request,$bookid,$userid)
    {   
        $book = Book::where('id', $bookid)->first();
        
        Cart::create([
            'user_id' => $userid,
            'book_id' => $bookid,
            'title' => $book->title

        ]);
        
        $data = Cart::where('user_id', $userid)->get();
        return view('cart', compact('data'));
        
        
        
    }
    public function deleteCart(Request $request,$id,$userid)
    {
        $data = Cart::where('id',$id)->delete();
        
        return redirect()->route('cart',$userid);
    }
    public function transaction($id)
    {
        $data = Cart::where('user_id',$id)->delete();
        return view('success');
    }

    public function profile($id)
    {
        $data = User::where('id', $id)->get();
        return view('profile', compact('data'));
    }


}
