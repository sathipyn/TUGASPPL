<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use App\Models\User;
use App\Models\Contact;
use App\Models\Address;

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
        $contact->save();
        return redirect('/contact')->with('flash', 'Data berhasil diubah');
    }

    public function delete ($id)
    {
        $contact = Contact::find($id); 
        $contact->delete();
        return redirect('/contact')->with('flash', 'Data berhasil disimpan'); 
    }

    public function address()
    {
        $address = Address::all();
       
        return view('address', ['key'=>'address','address'=>$address]);
    }
    public function formaddress()
        {
            return view('formaddress',['key'=>'address']);
        }

        public function saveaddress(Request $request)
        {
            Address::create([
                'street'=>$request->street,
                'city'=>$request->city,
                'province'=>$request->province,
                'country'=>$request->country,
                'postalcode'=>$request->postalcode,
            ]);

            return redirect('/address')->with('flash', 'Data berhasil disimpan');
        }


    public function formeditaddress($id)
    {
        $address = Address::find($id);
        return view('formeditaddress', ['key'=>'address', 'address'=>$address]);
    }

    public function updateaddress ($id, Request $request)
    {
        $address = Address::find($id);
        $address->street = $request->street;
        $address->city = $request->city;
        $address->province= $request->province;
        $address->country = $request->country;
        $address->postalcode = $request->postalcode;
        $address->save();
        return redirect('/address')->with('flash', 'Data berhasil diubah');
    }

    public function deleteaddress ($id)
    {
        $address = Address::find($id); 
        $address->delete();
        return redirect('/address')->with('flash', 'Data berhasil dihapus'); 
    }
}

