<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama','nis','umur','jeniskelamin','alamat','class_id'
    ];

    public function class()
    {
        return $this->belongsTo(ClassRoom::class,'class_id','id');
    }
}
