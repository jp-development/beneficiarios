<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZonalCenter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'regional_id',
    ];

    public function regionals (){
        return $this->belongsTo(Regional::class, "regional_id");
    }
}
