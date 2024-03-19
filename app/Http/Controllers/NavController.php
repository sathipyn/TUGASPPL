<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use App\Models\User;
use App\Models\Contact;

class NavController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home' ]);
    }

    public function user()
    {
        $user = User::all();
        return view('user',['key'=>'user','user'=>$user]);
    }

    public function pencarianuser(Request $request)
        {
            $cari = $request->cari;
            $user = User::where('name', 'like', '%'.$cari.'%')->get();
            return view('user', ['key'=> '','user'=>$user]);
        }
    
        public function contact()
        {
            $contact = Contact::all();
           
            return view('contact', ['key'=>'contact','contact'=>$contact]);
        }

        public function formcontact()
        {
            return view('formcontact',['key'=>'contact']);
        }

        public function save(Request $request)
        {
            Contact::create([
                'namadepan'=>$request->namadepan,
                'namabelakang'=>$request->namabelakang,
                'email'=>$request->email,
                'nohp'=>$request->nohp,
                'alamat'=>$request->alamat,
            ]);
            return redirect('/contact')->with('flash', 'Data berhasil disimpan');
        }

        public function pencariancontact(Request $request)
        {
            $cari = $request->cari;
            $contact = Contact::where('namadepan', 'like', '%'.$cari.'%')
                            ->orWhere('namabelakang', 'like', '%'.$cari.'%')
                             ->get();
            
            return view('contact', ['key'=>'contact','contact'=>$contact]);
    }

    public function formeditcontact($id)
    {
        $contact = Contact::find($id);
        return view('formeditcontact', ['key'=>'contact', 'contact'=>$contact]);
    }

    public function update ($id, Request $request)
    {
        $contact = Contact::find($id);
        $contact->namadepan = $request->namadepan;
        $contact->namabelakang = $request->namabelakang;
        $contact->email = $request->email;
        $contact->nohp = $request->nohp;
        $contact->alamat = $request->alamat;
        $contact->save();
        return redirect('/contact')->with('flash', 'Data berhasil diubah');
    }

    public function delete ($id)
    {
        $contact = Contact::find($id); 
        $contact->delete();
        return redirect('/contact')->with('flash', 'Data berhasil dihapus'); 
    }
}