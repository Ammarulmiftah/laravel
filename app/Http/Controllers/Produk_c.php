<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class Produk_c extends Controller
{
    public function login() 
    {
        return view('login');
    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cek(Request $request)
    {
        $data = $request->validate([
            'email' =>['required', 'max:200'],
            'password' =>['required']
        ]);

        if (Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('login-succes','Selamat Datang');
        }else{
            return redirect('/')->with('Login Failed', 'Anda Belum Login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ])){
            return redirect('/login')->with('massage', 'Register Berhasil. Akun Anda Sudah Dibuat Silahkan Login Menggunakan Email Dan Password.');
        }else{
            return redirect('/Register')->with('massage', 'Silahkan Register Terlebih Dahulu');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('register');
    }


    public function dashboard()
    {
        $data = Produk::count();
        return view('dashboard', compact('data'), ["title" => 'Dashboard']);
    }
    public function tabel()
    {
        $data = Produk::all();
        return view('produk', compact('data'), ["title" => 'produk']);
    }

    public function tambah()
    {
        return view('tambah', ["title" => 'tambah data']);
    }

        public function simpan(Request $request)
        {
            $request->validate([
                'judulProduk' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required',
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
      
            $input = $request->all();
      
            if ($gambar = $request->file('gambar')) {
                $destinationPath = 'foto/';
                $fotogambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
                $gambar->move($destinationPath, $fotogambar);
                $input['gambar'] = "$fotogambar";
            }
            Produk::create($input);
         
            return redirect('/produk')->with('success','Produk Berhasil Ditambahkan!');
        
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data = Produk::find($id);
       return view('edit', compact('data'),["title"=>'Edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $request->validate([
            'judulProduk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $update = $request->all();
        
        if ($gambar = $request->file('gambar')) {
            $penyimpanan = 'foto/';
            $fotogambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($penyimpanan, $fotogambar);
            $update['gambar'] = "$fotogambar";
        }else{
            unset($update['gambar']);
        }
        
        $produk->update($update);
        
        return redirect('/produk')->with('nice','Produk Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('/produk')->with('successDelete', 'Delete Berhasil');
    }
}
