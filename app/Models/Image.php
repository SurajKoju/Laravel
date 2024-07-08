<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    protected $fillable = ['form_submission_id', 'path'];

    public function formSubmission()
    {
        return $this->belongsTo(FormSubmission::class);
    }
}
