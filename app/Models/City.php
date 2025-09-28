<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'slug',
        'is_locked',
    ];

    public function delete()
    {
        if ($this->is_locked) {
            throw new \Exception('Data ini tidak bisa dihapus.');
        }
        return parent::delete();
    }
}
