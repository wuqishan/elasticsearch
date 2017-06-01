<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Es as EsModel;
use App\Model\Tax as TaxModel;

class EsController extends Controller
{
    public function store(EsModel $esModel, TaxModel $taxModel)
    {
        $data100 = $taxModel->get100();
        $esModel->store($data100);
    }

    public function get(EsModel $esModel, Request $request)
    {
        return $esModel->get($request->id);
    }

    public function indices(EsModel $esModel)
    {
        $esModel->indices();
    }
}
