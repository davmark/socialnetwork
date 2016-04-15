<?php
namespace App\Http\Controllers\Company;

use App\Http\Controllers\Company\CompanyBaseController;

class CompanyController extends CompanyBaseController
{
    public function getIndex()
    {
        return view('companies/company/index');
    }
}