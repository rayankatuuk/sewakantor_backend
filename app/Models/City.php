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

    protected $casts = [
        'is_locked' => 'boolean',
    ];

    public function officeSpaces()
    {
        return $this->hasMany(\App\Models\OfficeSpace::class, 'city_id');
    }

    public function delete()
    {
        if ($this->is_locked) {
            throw new \Exception('Data ini tidak bisa dihapus.');
        }
        return parent::delete();
    }
}
