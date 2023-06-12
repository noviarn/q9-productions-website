<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    protected $table = 'kontens';
    use HasFactory;
    protected $fillable = ['img_konten', 'judul_konten', 'Author', 'isi_konten', 'sumber', 'user_id'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
