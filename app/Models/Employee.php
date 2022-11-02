<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $guarded = [];
    protected $appends = ['full_name', 'mobile_number'];

    public function getFullNameAttribute() {
        $fname = strtolower($this->first_name);
        $lname = strtolower($this->last_name);
        return ucfirst($fname)." ".ucfirst($lname);
    }

    public function getMobileNumberAttribute() {
        return "+91".$this->mobile;
    }
}
