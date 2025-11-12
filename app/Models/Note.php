<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'uuid',
    //     'title',
    //     'text',
    //     'user_id', // ✅ Add this line
    // ];
    
    protected $guarded = [];

    public function getRouteKeyName()
        {
            // return parent::getRouteKeyName();
            return 'uuid';
        }

}
