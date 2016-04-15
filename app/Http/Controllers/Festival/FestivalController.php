<?php
namespace App\Http\Controllers\Festival;

use App\Http\Controllers\Festival\ComapnyBaseController;

class FestivalController extends FestivalBaseController
{
    public function getIndex()
    {
        return view('festivals/festival/index');
    }
}