<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = ['name','address','description','website','email','logo'];

    public function employees()
    {
    	return $this->hasMany(Employee::class);
    }
}
