<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Galcat;
class Gallery extends Model
{
    use HasFactory;
    protected $fillable = ['title','category','logo'];

    public function Galcat()
    {
        # code...
        return $this->belongsTo(Galcat::class, 'category','id');
    }
}
