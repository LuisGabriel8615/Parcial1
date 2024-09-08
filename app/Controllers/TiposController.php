<?php

namespace App\Controllers;
use App\Models\TiposModel;

class TiposController extends BaseController
{
    public function combo()
    {
        $model = new TiposModel();
        $datos1['options'] = $model->getOptions(); 

        return view('form_modificar_producto', $datos1);
    }
}