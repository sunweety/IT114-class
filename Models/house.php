<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\House;
use App\Models\Landlord;
use App\Models\Record;

class house extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function records()
    {
        return $this->belongsTo(Record::class, 'house_id');
        
    }
}