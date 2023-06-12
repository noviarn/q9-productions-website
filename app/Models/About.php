<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'abouts';
    protected $fillable = ['sec1_title', 'sec1_subtitle', 'sec1_isi_konten', 'sec1_img','sec2_title', 'sec2_img1', 'sec2_img2', 'sec3_title', 'sec3_subtitle', 'sec3_jenis', 'user_id'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
