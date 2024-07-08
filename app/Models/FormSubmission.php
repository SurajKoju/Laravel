<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSubmission extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'type', 'message'];
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
