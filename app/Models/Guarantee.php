<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guarantee extends Model
{
    use HasFactory;

    protected $fillable = ['company_id', 'user_id', 'thumbnail', 'starts', 'ends'];


    public function companies()
    {
        $this->belongsTo(Company::class);
    }


    public function categories()
    {
        $this->belongsTo(Category::class);
    }
}
