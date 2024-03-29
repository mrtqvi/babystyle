<?php

namespace App\Models\Market;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = "provinces";

    protected $fillable = ['name', 'is_active'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
