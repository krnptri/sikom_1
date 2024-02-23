<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = "peminjaman";
    protected $guarded = ['id']; //MENGATUR HANYA COLUMN ID BUKU YANG TIDAK BOLEH DI ISI

    //RELASI DARI MODEL USER KE PEMINJAMAN
    public function user(){
       return $this->belongsTo(User::class);
   }

    //RELASI DARI MODEL BUKU KE PEMINJAMAN
       public function buku(){
        return $this->belongsTo(Buku::class);
    }

}
