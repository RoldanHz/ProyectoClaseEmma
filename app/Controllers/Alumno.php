<?php

namespace App\Controllers;

class Alumno extends BaseController
{
    public function index()
    {
        
    }

    public function mostrar() {

        $alumnoModel =model('AlumnoModel');
        $data['alumnos'] = $alumnoModel->findAll();
        #desarrollo testing, para demostración
        return 
        view('common/head').
        view('common/menu').
        view('alumno/mostrar',$data).
        view('common/footer');
    }

    public function agreg() {
        $gradoModel = model('GradoModel');
        $grupoModel = model('GrupoModel');

        $data['grados'] = $gradoModel->findAll();
        $data['grupos'] = $grupoModel->findAll();


        $validation = \Config\Services::validation();

            if (strtolower($this->request->getMethod()) === 'get'){
                //insertamos
                return
                view('common/head').
                view('common/menu').
                view('alumno/agregar2',$data).
                view('common/footer');
            }

            $rules =[
                'nombre' => 'required|max_length[40]',
                'sexo' => 'required',
                'fechaNacimiento' => 'required|max_length[40]'
            ];

            if (! $this->validate($rules)) {
                return view('common/head',)
                .  view('common/menu')
                . view('alumno/agregar2',$data,['validation' => $validation])
                . view('common/footer');
            }
            else {
                if($this->inser()){
                    return redirect('alumno/mostrar', 'refresh');
                }
            }

    }
    public function inser() {
        $alumnoModel = model('AlumnoModel');
        print_r($_POST);

        $data = [
            "nombre"=>$_POST['nombre'],
            "sexo"=>$_POST['sexo'],
            "fechaNacimiento"=>$_POST['fechaNacimiento'],
            "idgrado"=>$_POST['idgrado'],
            "idgrupo"=>$_POST['idgrupo']
        ];
       $alumnoModel->insert($data, false);
       return true;
    }











    public function agregar() {
        $data['title']= "Agregar Alumno";

        $validation = \Config\Services::validation();

            if (strtolower($this->request->getMethod()) === 'get'){
                //insertamos
                return
                view('common/head',$data).
                view('common/menu').
                view('alumno/agregar').
                view('common/footer');
            }

            $rules =[
                'nombre' => 'required|max_length[40]',
                'sexo' => 'required',
                'fechaNacimiento' => 'required|max_length[40]'
            ];

            if (! $this->validate($rules)) {
                return view('common/head', $data)
                .  view('common/menu')
                . view('alumno/agregar',['validation' => $validation])
                . view('common/footer');
            }
            else {
                if($this->insert()){
                    return redirect('alumno/mostrar', 'refresh');
                }
            }
    }
    public function insert() {
        $alumnoModel = model('AlumnoModel');
        $data = [
            "nombre"=>$_POST['nombre'],
            "sexo"=>$_POST['sexo'],
            "fechaNacimiento"=>$_POST['fechaNacimiento']
        ];
        $alumnoModel->insert($data, false);
        return true;
    }



    public function editar($id) {
        $alumnoModel=model('AlumnoModel');
        $data['alumno']=$alumnoModel->find($id);
        return
        view('common/head').
        view('common/menu').
        view('alumno/editar', $data).
        view('common/footer');
    }

    public function update() {
        $alumnoModel = model('AlumnoModel');
        $data = array(
            "nombre"=>$_POST['nombre'],
            "sexo"=>$_POST['sexo'],
            "fechaNacimiento"=>$_POST['fechaNacimiento']
        );
        $alumnoModel->update($_POST['id'], $data);
        return redirect('alumno/mostrar', 'refresh');
    }


    public function buscar(){
        $alumnoModel = model('AlumnoModel');
        if(isset($_GET['nombre'])){
            $nombre=$_GET['nombre'];
            $sexo=$_GET['sexo'];
            $data['alumnos']=$alumnoModel->like('nombre',$nombre)
            ->like('sexo',$sexo)->findAll();
        }
        else{
            $nombre="";
            $data['alumnos']=$alumnoModel->findAll();
        }

        return
        view('common/head').
        view('common/menu').
        view('alumno/buscar', $data).
        view('common/footer');
    }

    public function estadística() {
        
    }

    public function delete($id) {
        $alumnoModel = model('AlumnoModel');
        $alumnoModel->delete($id);
        return redirect('alumno/mostrar', 'refresh');
    }
}
