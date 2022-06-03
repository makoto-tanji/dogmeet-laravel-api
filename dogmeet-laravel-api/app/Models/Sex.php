<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sex extends Model
{
    use HasFactory;

    // dogssテーブルが持つsex_idからsexesテーブルのレコードが1件参照される
    public function dog()
    {
        return $this->hasOne(Dog::class);
    }
}
