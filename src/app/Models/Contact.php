<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'tell',
        'address',
        'builing',
        'detail'
    ];
    public static $rules = array(
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'email' => 'required|email',
        'tell' =>
        'required|regex:/^[0-9]+$/',
        'address' => 'required',
        'builing' => 'rerquired',
        'detail' => 'required|string|max:120'
    );
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
