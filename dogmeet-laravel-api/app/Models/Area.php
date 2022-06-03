<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_name'
    ];

    // usersテーブルが持つarea_idからrolesテーブルのレコードが1件参照される
    public function dog()
    {
        return $this->hasOne(User::class);
    }
}
