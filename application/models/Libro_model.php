<?php
class Libro_model extends CI_Model {

    public function obtener_libros()
    {
        $query = $this->db->get('libros');
        return $query->result();
    }

    public function eliminar_libro($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('libros');
    }
    public function insertar_libro($datos)
    {
        $this->db->insert('libros', $datos);
    }
    public function obtener_libro($id)
{
    $this->db->where('id', $id);

    $query = $this->db->get('libros');

    return $query->row();
}

public function actualizar_libro($id, $datos)
{
    $this->db->where('id', $id);

    $this->db->update('libros', $datos);
}
}