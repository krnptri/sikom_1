<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koleksipribadi extends Model
{
    use HasFactory;
    protected $guarded = ['id']; //MENGATUR HANYA COLUMN ID BUKU YANG TIDAK BOLEH DI ISI

    //RELASI DARI MODEL USER KE KOLEKSI PRIBADI
    public function user(){
       return $this->belongsTo(User::class);
   }

    //RELASI DARI MODEL BUKU KE KOLEKSI PRIBADI
    public function buku(){
        return $this->belongsTo(Buku::class);
    }
}
