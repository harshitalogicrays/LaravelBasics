<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    use HasFactory;
    protected $table="emp";
    protected $primaryKey="empid";
    
    public function getGroup(){
       return $this->hasOne('App\Models\Dept','dept_id','dept_id');
    }
}
