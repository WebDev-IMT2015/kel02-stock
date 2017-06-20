<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftarbarang extends Model
{
    protected $fillable = ['nama','deskripsi','harga','jumlah','dari'];
}
