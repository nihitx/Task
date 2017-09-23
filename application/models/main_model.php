<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  Model class for Main controller functions
 */

class Main_model extends CI_Model {

	public function getAllGarage () {
  /* No SQL injection protection is needed since its a normal call */
  $query = '
            select  a.*
            from    garage a';

  $query = $this->db->query($query);
  $result = $query->result();
  return $result;

	}

  public function getAllGarageOwner($owner){
    /* SQL injection protection using query binding */
    $query = '
              select  a.*
              from    garage a
              where   name = ?';

    $query = $this->db->query($query,array($owner));
    $result = $query->result();
    return $result;

  }

  public function getAllGarageByCountry($country){
    /* SQL injection protection using query binding */
    $query = '
              select  a.*
              from    garage a
              where   a.country = ?';

    $query = $this->db->query($query, array($country));
    $result = $query->result();
    return $result;

  }

  public function getAllGarageByCordinates($lat,$long){
    /* SQL injection protection using query binding */
    $query = '
              select  a.*
              from    garage a
              where   a.point = POINT(?,?)';
    $query = $this->db->query($query, array($lat,$long));
    $result = $query->result();
    return $result;
  }

}

?>
