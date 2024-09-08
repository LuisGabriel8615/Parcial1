<?php

namespace App\Controllers;
use App\Models\ProductosModel;
use App\Models\TiposModel;

class ProductosController extends BaseController
{
    public function index(): string
    {
        $productos = new ProductosModel();
        $datos['datos']=$productos->findAll();
        //print_r($datos);
       
        return view('Productos',$datos);
    }

    public function nuevoproducto():string
    {
        $model = new TiposModel();
            $datos['options'] = $model->getDatos(); 
            //print_r($datos);
        return view('Form_nuevo_producto1',$datos);
    }
    
    public function guardarprod()
    {
        $producto = new ProductosModel();
        $datos=
        [
            'producto_id'=>$this->request->getPost('txtcodigo'),
            'nombre'=>$this->request->getPost('txtnombre'),
            'descripcion'=>$this->request->getPost('txtdescripcion'),
            'cantidad_existencia'=>$this->request->getPost('txtcantidad'),
            'fecha_vencimiento'=>$this->request->getPost('txtfechavencimiento'),
            'tipo_producto_id'=>$this->request->getPost('tipo_producto'),
        ];
        $producto->insert($datos);
        return redirect()->route('ver_productos');
    }

    public function eliminarproducto($id=null){
        $producto = new ProductosModel();
        $producto->delete(['producto_id'=>$id]);
        return redirect()->route('ver_productos');
        
 
     }

     public function inicio(){
    
        return view('inicio'); 
     }

    //public function buscarprod($id=null){
    // $producto = new ProductosModel();
    // $datos['datos']=$producto->where(['producto_id'=>$id])->first();
    //return view('form_modificar_producto',$datos);
    // $model = new TiposModel();
    //$datos1['options'] = $model->getDatos(); 
    //return view('form_modificar_producto',$datos, $datos1);
    //return redirect()->route('buscar_tipo');

        public function buscarprod($id = null)
        {
            $producto = new ProductosModel();
            $datos['datos'] = $producto->where(['producto_id' => $id])->first();

            $model = new TiposModel();
            $datos['options'] = $model->getDatos(); 
            //print_r($datos);

           return view('form_modificar_producto', $datos);
        }
            
            
    public function modificarproducto()
    {
        $producto = new ProductosModel();
        $datos=[
            'producto_id'=>$this->request->getPost('txtcodigo'),
            'nombre'=>$this->request->getPost('txtnombre'),
            'descripcion'=>$this->request->getPost('txtdescripcion'),
            'cantidad_existencia'=>$this->request->getPost('txtcantidad'),
            'fecha_vencimiento'=>$this->request->getPost('txtfechavencimiento'),
            'tipo_producto_id'=>$this->request->getPost('tipo_producto'),
        ];
        $producto->update($datos['producto_id'],$datos);
        echo "datos modificados";
        return redirect()->route('ver_productos');
    }
   

}



