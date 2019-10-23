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
	public function get_list(string $search = NULL, int $page = 1, int $page_size = 20): array
	{
		$items = [];

		if ($search) {
			$this->db->like('title', $search);
		}
		// Clone current db object, so we can get the total number first
		$count_query = clone $this->db;

		$total_number = $count_query->count_all_results($this->table_name);
		// If there is no matched records, then we don't need to do search
		if ($total_number) {
			$items = $this->db->select('id, title, author')
				->limit($page_size, ($page - 1) * $page_size)
				->get($this->table_name)
				->result();
		}

		return [
			'total_page' => ceil($total_number / $page_size),
			'page' => $page,
			'items' => $items
		];
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
