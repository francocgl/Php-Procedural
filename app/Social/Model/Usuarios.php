<?php
namespace Social\Model;

use Social\DB\DBConnection;
use PDO;

class Usuarios
{
  private $id_usuarios;
  private $nombre;
  private $apellido;
  private $email;
  private $clave;
  private $fecha_nacimiento;
  private $imagen;
  private $descripcion;
  private $fecha_alta;

public static function traerUsuarios()
{
    $query = "SELECT id_usuarios, nombre, apellido, email, clave, fecha_nacimiento, imagen, descripcion, fecha_alta, estudios,sexo
    FROM  usuarios
    LEFT JOIN estudios ON usuarios.fkestudios = estudios.id_estudios
		LEFT JOIN sexo ON usuarios.fksexo = sexo.id_sexo ";
    $db = DBConnection::getConnection();
    $stmt = $db->prepare($query);
    $stmt->execute();

    $salida = [];

    while($fila = $stmt->fetch())
     {
          $peli = new Usuarios();
          $peli->cargarDatos($fila);
          $salida[] = $peli;
      }

    return $salida;
}


public function cargarDatos ($datos)
{
    $this->setId_usuarios($datos['id_usuarios']);
    $this->setNombre($datos['nombre']);
    $this->setApellido($datos['apellido']);
    $this->setEmail($datos['email']);
    $this->setClave($datos['clave']);
    $this->setFecha_nacimiento($datos['fecha_nacimiento']);
    $this->setImagen($datos['imagen']);
    $this->setDescripcion($datos['descripcion']);
    $this->setFecha_alta($datos['fecha_alta']);
}


/****** GETTERS Y SETTERS ****************/
public function getId_usuarios()
{
    return $this->id_usuarios;
}
public function setId_usuarios($id)
{
    $this->id_usuarios = $id_usuarios;
}
public function getNombre()
{
  return $this->nombre;
}
public function setNombre()
{
  $this->nombre = $nombre;
}
public function getApellido()
{
  return $this->apellido;
}
public function setApellido()
{
  $this->apellido = $apellido;
}
public function getEmail()
{
  return $this->email;
}
public function setEmail()
{
  $this->email = $email;
}
public function getClave()
{
  return $this->clave;
}
public function setClave()
{
  $this->clave = $clave;
}
public function getFecha_nacimiento()
{
  return $this->fecha_nacimiento;
}
public function setFecha_nacimiento()
{
  $this->fecha_nacimiento = $fecha_nacimiento;
}
public function getImagen()
{
  return $this->imagen;
}
public function setImagen()
{
  $this->imagen = $imagen;
}
public function getDescripcion()
{
  return $this->descripcion;
}
public function setDescripcion()
{
  $this->descripcion = $descripcion;
}
public function getFecha_alta()
{
  return $this->fecha_alta;
}
public function setFecha_alta()
{
  $this->fecha_alta = $fecha_alta;
}
}
