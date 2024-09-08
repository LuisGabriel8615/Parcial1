<?php

namespace App\Models;

use CodeIgniter\Model;

class TiposModel extends Model
{
    protected $table = 'tipos_producto'; 
    public function getDatos()
    {
        return $this->findAll(); 
    }
}