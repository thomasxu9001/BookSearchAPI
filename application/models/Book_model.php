<?php

/**
 * Class Add_on_model
 *
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $description
 */
class Book_model extends CI_Model
{
	private $table_name = 'book';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	/**
	 * @param string $search
	 * @param int $page
	 * @param int $page_size
	 * @return array
	 */
	public function get_list(string $search = NULL, int $page = 1, int $page_size = 5): array
	{
		$this->db->select('id, title, author');

		if ($search) {
			$this->db->like('title', $search);
		}

		return $this->db->limit($page_size, ($page - 1) * $page_size)
			->get($this->table_name)
			->result();
	}

	/**
	 * @param int $id
	 * @return stdClass
	 */
	public function get_book_details(int $id): stdClass
	{
		return $this->db->where('id', $id)->get($this->table_name)->row();
	}
}
