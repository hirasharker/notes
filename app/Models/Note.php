<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use HasFactory, SoftDeletes;

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function notebook()
    {
        return $this->belongsTo(Notebook::class);
    }
}
