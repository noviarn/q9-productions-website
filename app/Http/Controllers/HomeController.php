<?php

namespace App\Http\Controllers;
use App\Models\Konten;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        // $kontens = Konten::all();
        return view('home');
    }
    public function search(Request $request)
	{
		// // menangkap data pencarian
		// $search = $request->input('search');
 
    	// // Perform the search query using the input query
        // $results = Konten::where('judul_konten', 'like', '%'.$search.'%')->orWhere('Author', 'like', '%'.$search.'%')->orWhere('isi_konten', 'like', '%'.$search.'%')->get();
    		// mengirim data pegawai ke view index
		return view('result-event',);
 
	}
    public function about(){
        // $kontens = Konten::all();
        return view('about');
    }
    public function gallery(){
        // $kontens = Konten::all();
        return view('gallery');
    }
    public function contact(){
        // $contact = Contact::where('id', 1)->first();
        
        return view('contact-us');
    }
    public function contactPost(Request $request){
        $fullname = $request->fullname;
        $email = $request->email;
        $nohp = $request->noHp;
        $message = $request->message;
        $nowa = $request->noWa;

        return redirect("https://api.whatsapp.com/send?phone=$nowa&text=Hallo%2C%20saya%20ingin%20bertanya%20mengenai%20Q9%20Productions:%0A%0AFull%20Name:%20$fullname.%0APhone%20Number:%20$nohp.%0AEmail:%20$email.%0AMessage:%20$message.%0A%0ATerimakasih.");
    }
}
