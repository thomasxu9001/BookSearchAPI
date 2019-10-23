<?php

use PHPUnit\Framework\TestCase;

/*
 * Typically, we should have a separate test database.
 * */

final class Test_book_model extends TestCase
{
	public $ci;

	public function __construct()
	{
		parent::__construct();
		$this->ci = &get_instance();
		$this->ci->load->model('Book_model');
	}

	public function test_get_list()
	{
		// Get default search result
		$result = $this->ci->Book_model->get_list();
		$this->assertEquals(20, count($result['items']));
		$this->assertEquals('A Technique for Producing Ideas', $result['items'][4]->title);
		$this->assertEquals(2, $result['total_page']);

		// Now let's do some key word search
		$key_result = $this->ci->Book_model->get_list('Technique');
		$this->assertEquals(1, count($key_result['items']));
		$this->assertEquals('A Technique for Producing Ideas', $key_result['items'][0]->title);
		$this->assertEquals(1, $key_result['total_page']);

		// Use another key word to do a search
		$new_key_result = $this->ci->Book_model->get_list('art');
		$this->assertEquals(2, count($new_key_result['items']));
		$this->assertEquals('The Art of Possibility', $new_key_result['items'][0]->title);
		$this->assertEquals('The Art of War', $new_key_result['items'][1]->title);
		$this->assertEquals(1, $new_key_result['total_page']);

	}
	
	public function test_get_book_details()
	{
		$book = $this->ci->Book_model->get_book_details(7);

		$this->assertEquals(7, $book->id);
		$this->assertEquals('Anything You Want', $book->title);
		$this->assertEquals('Derek Sivers', $book->author);
		$this->assertEquals('The Book in Three Sentences: Too many people spend their life pursuing things that don’t actually make them happy. When you make a business, you get to make a little universe where you create all the laws. Never forget that absolutely everything you do is for your customers.',
			$book->description);

	}
}
