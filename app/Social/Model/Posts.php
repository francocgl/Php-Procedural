<?php

namespace Social\Model;
use Social\DB\DBConnection;
use PDO;

class Posts
{
    private $id_posts;
    private $imagen;
    private $descripcion;

/*********** SETTERS AND GETTERS *********/
 public function getId_posts()
 {
   return $this->id_posts;
 }
 public function setId_posts()
 {
   $this->id_posts = $id_posts;
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
}
