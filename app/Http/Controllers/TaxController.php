<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Tax as TaxModel;

class TaxController extends Controller
{
    public function index()
    {
        return view('tax.index');
    }







    public function get()
    {
        $data = ['data' => ['id' => 1, 'name' => 'test es']];

        return $data;
    }





    public function get100(TaxModel $taxModel)
    {
        #$res = $taxModel->get100();
    }
}
