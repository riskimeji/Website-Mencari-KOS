<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Tipe;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Daerah;
use App\Models\Kecamatan;
use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Auth;


class ProdukDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.produk.produk',[
            'produks'=>Produk::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.produk.create',[
            'tipes'=>Tipe::all(),
            'provinsis'=>Provinsi::all(),
            'kotas'=>Kota::all(),
            'kecamatans'=>Kecamatan::all(),
            'daerahs'=>Daerah::all(),
            'genders'=>Gender::all()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'=>'required',
            'alamat'=>'required|max:1000',
            'tipe_id'=>'required',
            'gender_id'=>'required',
            'provinsi_id'=>'required',
            'kota_id'=>'required',
            'kecamatan_id'=>'required',
            'daerah_id'=>'required',
            'harga'=>'required',
            'image'=>'mimes:jpg,png,jpeg|image|max:2048|required'
        ]);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->alamat),80);
        $validatedData['image'] =  Str::replace('uploads/','',$request->file('image')->store('uploads'));
        $validatedData['user_id'] = auth()->user()->id;
        //dd($validatedData);
        if($request->hasFile('image')){
            $request->file('image')->move(public_path('uploads/'), $request->file('image')->getClientOriginalName());
        }else{
            $path='';
        }        
        Produk::create($validatedData);
        return redirect('/produk-dashboard')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk, $id)
    {

        return view('dashboard.produk.edit',[
            // 'produk'=>$produk,
            'produk'=>Produk::find($id),
            'tipes'=>Tipe::all(),
            'kotas'=>Kota::all(),
            'kecamatans'=>Kecamatan::all(),
            'daerahs'=>Daerah::all(),
            'genders'=>Gender::all(),
            'provinsis'=>Provinsi::all(),
            'image'=>'mimes:jpg,png,jpeg|image|max:2048|required'
            
        ]);
        $validatedData['image'] =  Str::replace('uploads/','',$request->file('image')->store('uploads'));
        if($request->hasFile('image')){
            $request->file('image')->move(public_path('uploads/'), $request->file('image')->getClientOriginalName());
        }else{
            $path='';
        }    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk, $id)
    {
        $validatedData = $request->validate([
            'nama'=>'required',
            'alamat'=>'required|max:1000',
            'tipe_id'=>'required',
            'gender_id'=>'required',
            'provinsi_id'=>'required',
            'kota_id'=>'required',
            'kecamatan_id'=>'required',
            'daerah_id'=>'required',
            'harga'=>'required',
            'image'=>'mimes:jpg,png,jpeg|image|max:2048|required'

        ]);
        if($validatedData['image'] != null || $validatedData['image'] == ''){
            Storage::delete($validatedData['image']);
        }else
        if($request->hasFile('image')){
            $request->file('image')->move(public_path('uploads/'), $request->file('image')->getClientOriginalName());
        }else{
            $path='';
        }  
        $validatedData['image'] =  Str::replace('uploads/','',$request->file('image')->store('uploads'));
        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->alamat),80);

  

        Produk::where('id',$id)->update($validatedData);
        return redirect('/produk-dashboard')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk, $id)
    {
        Produk::destroy($id);
        return redirect('/produk-dashboard')->with('pesan','Data berhasil dihapus');
    }
}
