<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\House;
use App\Models\Landlord;
use App\Models\Record;

class record extends Model
{
    
    use HasFactory;
    protected $guarded = [];

    public function records()
    {
        return $this->belongsTo(Landlord::class, tenant::class, user::class);
        
    }



    public function houses()
    {
        return $this->hasMany(House::class, 'house_id');
        
    }
}
