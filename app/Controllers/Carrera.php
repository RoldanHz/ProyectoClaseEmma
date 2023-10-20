<?php

namespace App\Controllers;

class Carrera extends BaseController
{
    public function index()
    {
        
    }

    public function mostrar() {

        $carreraModel =model('CarreraModel');
        $data['carreras'] = $carreraModel->findAll();
        #desarrollo testing, para demostración
        return 
        view('common/head').
        view('common/menu').
        view('carrera/mostrar',$data).
        view('common/footer');
    }

    public function agregar() {
        $data['title']= "Agregar Carrera";

        $validation = \Config\Services::validation();

            if (strtolower($this->request->getMethod()) !== 'post'){
                //insertamos
                print "insert";
            }

            $rules =[
                'carrera' => 'required|max_length[30]'
            ];

            if (! $this->validate($rules)) {
                return view('common/head', $data)
                . view('carrera/agregar',['validation' => $validation])
                . view('common/footer');
            }
            else {
                if($this->insert()){
                    return redirect('carrera/mostrar', 'refresh');
                }
            }
    }
    public function insert() {
        $carreraModel =model('CarreraModel');
        $data= [
            "nombre" => $_POST['carrera'],
            "acronimo" => $_POST['acronimo']
        ];
        $carreraModel->insert($data, false);
        return true;
    }
    
}
