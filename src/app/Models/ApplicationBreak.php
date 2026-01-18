<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationBreak extends Model
{
    use HasFactory;
    protected $table = 'application_breaks';
    protected $fillable = ['application_id', 'break_in', 'break_out'];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
