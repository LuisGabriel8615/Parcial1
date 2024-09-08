<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductosModel  extends Model
{
    protected $table         = 'productos';
    protected $primaryKey =  'producto_id';
    protected $allowedFields = [
        'producto_id','nombre', 'descripcion','cantidad_existencia','fecha_vencimiento','tipo_producto_id'
    ];
    //protected $returntype = \APP\Entities\user::class;

}
?>