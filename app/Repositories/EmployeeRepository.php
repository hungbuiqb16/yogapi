<?php 
namespace App\Repositories;

use App\Models\Employee;

class EmployeeRepository extends BaseRepository
{
    protected $employee;

    public function __construct(Employee $employee)
    {
        parent::__construct($employee);
    }
}


 ?>