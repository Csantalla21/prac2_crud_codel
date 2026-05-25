<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libros extends CI_Controller {

    public function index()
    {
        $this->load->model('Libro_model');

        $datos['libros'] = $this->Libro_model->obtener_libros();

        $this->load->view('libros_view', $datos);
    }

    public function eliminar($id)
    {
        $this->load->model('Libro_model');

        $this->Libro_model->eliminar_libro($id);

        header("Location: http://localhost:8080/prac_codel/index.php/libros");
exit;
    }
    public function nuevo()
{
    $this->load->view('formulario_libro');
}

public function guardar()
{
    $this->load->model('Libro_model');

    $datos = array(
        'id' => $this->input->post('id'),
        'titulo' => $this->input->post('titulo'),
        'autor' => $this->input->post('autor'),
        'isbn' => $this->input->post('isbn'),
        'estado_prestamo' => $this->input->post('estado_prestamo')
    );

    $this->Libro_model->insertar_libro($datos);

    header("Location: http://localhost:8080/prac_codel/index.php/libros");
    exit;
}
public function editar($id)
{
    $this->load->model('Libro_model');

    $datos['libro'] = $this->Libro_model->obtener_libro($id);

    $this->load->view('editar_libro', $datos);
}

public function actualizar()
{
    $this->load->model('Libro_model');

    $id = $this->input->post('id');

    $datos = array(
        'titulo' => $this->input->post('titulo'),
        'autor' => $this->input->post('autor'),
        'isbn' => $this->input->post('isbn'),
        'estado_prestamo' => $this->input->post('estado_prestamo')
    );

    $this->Libro_model->actualizar_libro($id, $datos);

    header("Location: http://localhost:8080/prac_codel/index.php/libros");
    exit;
}

}