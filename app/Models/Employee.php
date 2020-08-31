<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = ['first_name','last_name','address','avatar','phone','company_id','email'];

    public function company()
    {
    	return $this->belongsTo(Company::class);
    }
}
