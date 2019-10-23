<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

/**
 * Description of RestGet
 *
 * @author https://roytuts.com
 */
class Rest extends CI_Controller
{
	use REST_Controller {
		REST_Controller::__construct as private __resTraitConstruct;
	}

	function __construct()
	{
		parent::__construct();
		$this->__resTraitConstruct();
		$this->load->model('Book_model');
	}


	/**
	 * Get book list
	 */
	function books_get()
	{
		$search = $this->get('search');
		$page = $this->get('page') ? $this->get('page') : 1;

		$books = $this->Book_model->get_list($search, $page);

		$this->response($books, 200);
	}


	/**
	 * Get detailed info of the book
	 */
	function book_get()
	{
		if (!$this->get('id')) {
			$this->response(NULL, 400);
		}

		$book = $this->Book_model->get_book_details($this->get('id'));

		if ($book) {
			$this->response($book, 200); // 200 being the HTTP response code
		} else {
			$this->response(NULL, 404);
		}
	}

}
