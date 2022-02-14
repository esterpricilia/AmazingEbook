<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    protected $table='book';
    protected $guarded=[]; 
    public function detail($id)
    {
        return DB::table('book')->where('id', $id)->first();
    }
}
