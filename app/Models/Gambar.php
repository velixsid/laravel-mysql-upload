<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gambar extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function gambar(){
        if(Storage::exists($this->gambar)){
            return asset('storage/'.$this->gambar);
        }
    }
}
