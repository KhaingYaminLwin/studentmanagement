<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymentpage extends Model
{
    protected $table= 'paymentpages';
    protected $primaryKey= 'id';
    protected $fillable = ['enrollment_id', 'paid_date' ,'amount'];
    use HasFactory;

    public function enrollment(){
        return $this->belongsTo(Enrollment::class);
    }
}
