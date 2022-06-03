<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    use HasFactory;

    protected $fillable = [
        'breed_name',
        'size'
    ];

    // dogsテーブルが持つbreed_idからbreedsテーブルのレコードが1件参照される
    public function dog()
    {
        return $this->hasOne(Dog::class);
    }
}
