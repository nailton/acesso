<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controllername extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies

		$this->load->database();

		$this->load->library('grocery_CRUD');

  }

  // List all your items
  public function index( $offset = 0 )
  {

  }

  // Add a new item
  public function add()
  {

  }

  //Update one item
  public function update( $id = NULL )
  {

  }

  //Delete one item
  public function delete( $id = NULL )
  {

  }
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */
 ?>
