<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Customer extends Model
{
    use HasFactory;
    use softDeletes; //Traits
    protected $table="customers";
    protected $primaryKey="customer_id";

    // public function getDobAttribute($v){ // Accessor
    //     return(date('d-M-Y',strtotime($v)));
    // }
    public function setNameAttribute($v){ // mutator
        $this->attributes['name']=ucwords($v);
    }
}
