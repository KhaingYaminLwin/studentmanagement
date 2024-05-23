<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table ='payments';
    protected $primaryKey = 'id';
    protected $fillable = ['enroll_no', 'paid_date','amount'];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }

}
