<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $guarded=[];
public function tipe(){
        return $this->belongsTo(Tipe::class);
}
public function provinsi(){
    return $this->belongsTo(Provinsi::class);
}
public function kota(){
    return $this->belongsTo(Kota::class);
}
public function kecamatan(){
    return $this->belongsTo(Kecamatan::class);
}
public function daerah(){
    return $this->belongsTo(Daerah::class);
}
public function gender(){
    return $this->belongsTo(Gender::class);
}
public function user(){
    return $this->belongsTo(User::class);
}
public function produk(){
    return $this->belongsTo(Produk::class);
}
}
