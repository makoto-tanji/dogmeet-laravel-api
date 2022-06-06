<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    protected $fillable = [
        'dog_name',
        'overview',
        'birthday',
        'sex',
        'thumbnail_path',
        'area_id',
        'breed_id',
        'user_id',
    ];

    // dogsテーブルが持つarea_idからareasテーブルのレコードを1件取得
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 中間テーブルcolor_dog経由でcolor取得
    public function color_dog()
    {
        return $this->belongsToMany(Color::class);
    }

    // 中間テーブルdog_schedule経由でschedule取得
    public function dog_schedule()
    {
        return $this->belongsToMany(Schedule::class)->withPivot('meridian');
    }
}
