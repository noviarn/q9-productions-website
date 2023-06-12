<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $kontens = Konten::all();
        return view('admin.dashboard', compact('kontens'));
    }
    
    public function managepostPage(){
        $userId = Auth::id();
        $kontens = Konten::all();
        return view('admin.managepost', compact('userId', 'kontens'));
    }
    
    public function storeKonten(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul_konten' => 'required',
            'Author' => 'required',
            'isi_konten' => 'required',
            'sumber' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $validatedData['img_konten'] = $imageName;
        }
        Konten::create($validatedData);
        
        return redirect()->back();
        // Redirect or perform additional actions as needed
    }
    public function KontenDelete($id)
    {
        $konten = Konten::findOrFail($id);
        $konten->delete();
        return redirect('/manage-post-page');
        // Redirect or perform additional actions as needed
    }
    public function KontenEdit($id)
    {
        
        $kontens = Konten::where('id',$id)->first();

        return view('admin.managepostEdit', compact(['kontens']));
    }
    public function KontenUpdate(Request $request, $id)
    {
        $kontens = Konten::where('id',$id)->first();
        
        $kontens->update($request->all());
        if($request->hasFile('img_konten')){
            $request->file('img_konten')->move('images',$request->file('img_konten')->getClientOriginalName());
            $kontens->img_konten = $request->file('img_konten')->getClientOriginalName();
            $kontens->save();
            
        }
        $kontens->save();
        return redirect()->back();
    }
    public function settingHome(){
        return view('admin.setting-home-admin');
    }
    public function settingAbout(){
        $userId = Auth::id();
        $about = About::where('user_id',$userId)->first();
        return view('admin.setting-about-admin', compact(['about']));
    }
    public function settingGallery(){
        $userId = Auth::id();
        $gallery = Gallery::where('user_id',$userId)->first();
        return view('admin.setting-gallery-admin', compact(['gallery']));
    }
    public function settingContact(){
        $userId = Auth::id();
        $contact = Contact::where('user_id',$userId)->first();
        return view('admin.setting-contact-us-admin',  compact(['contact']));
    }
    public function editGallery(Request $request, $id){

        $gallery = Gallery::where('id',$id)->first();
        
        $gallery->update($request->all());
        if($request->hasFile('img_gallery')){
            $request->file('img_gallery')->move('images/gallery/',$request->file('img_gallery')->getClientOriginalName());
            $gallery->img_gallery = $request->file('img_gallery')->getClientOriginalName();
            $gallery->save();
            
        }
        $gallery->save();
        return view('admin.setting-gallery-admin', compact(['gallery']));
    }
    public function editContact(Request $request, $id){

        $contact = Contact::where('id',$id)->first();
        
        $contact->update($request->all());
        $contact->save();
        
        return view('admin.setting-contact-us-admin', compact(['contact']));
    }
    public function editAbout(Request $request, $id){

        $about = About::where('id',$id)->first();
        
        $about->update($request->all());
        if($request->hasFile('sec1_img')){
            $request->file('sec1_img')->move('images/about/',$request->file('sec1_img')->getClientOriginalName());
            $about->sec1_img = $request->file('sec1_img')->getClientOriginalName();
            $about->save();
            
        }
        if($request->hasFile('sec2_img1')){
            $request->file('sec2_img1')->move('images/about/',$request->file('sec2_img1')->getClientOriginalName());
            $about->sec2_img1 = $request->file('sec2_img1')->getClientOriginalName();
            $about->save();
            
        }
        if($request->hasFile('sec2_img2')){
            $request->file('sec2_img2')->move('images/about/',$request->file('sec2_img2')->getClientOriginalName());
            $about->sec2_img2 = $request->file('sec2_img2')->getClientOriginalName();
            $about->save();
            
        }
        $about->save();
        return view('admin.setting-about-admin', compact(['about']));
    }
}
