<?php 
namespace App\Repositories;

use App\Models\Company;

class CompanyRepository extends BaseRepository
{
    protected $model;

    public function __construct(Company $model)
    {
    	parent::__construct($model);
    }
}

 ?>