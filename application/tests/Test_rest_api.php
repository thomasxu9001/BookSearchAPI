<?php


class Test_rest_api extends TestCase
{
	protected $client;

	protected function setUp()
	{
		$this->client = new GuzzleHttp\Client([
			'base_uri' => 'http://localhost:8000'
		]);
	}

	public function test_get_books()
	{
		// Get default list
		$response = $this->client->get('/Rest/books');
		$this->assertEquals(200, $response->getStatusCode());

		$data = json_decode($response->getBody(), true);
		$this->assertEquals(20, count($data['items']));
		$this->assertEquals(1, $data['items'][0]['id']);
		$this->assertEquals(5, $data['items'][4]['id']);
		$this->assertEquals(2, $data['total_page']);

		// Now do some keyword search
		$response = $this->client->get('/Rest/books', [
			'query' => [
				'search' => 'art'
			]
		]);
		$this->assertEquals(200, $response->getStatusCode());

		$data = json_decode($response->getBody(), true);

		$this->assertEquals(2, count($data['items']));
		$this->assertEquals('The Art of Possibility', $data['items'][0]['title']);
		$this->assertEquals('The Art of War', $data['items'][1]['title']);
		$this->assertEquals(1, $data['total_page']);
	}

	public function test_get_book()
	{
		$response = $this->client->get('/Rest/book', [
			'query' => [
				'id' => 11
			]
		]);
		$this->assertEquals(200, $response->getStatusCode());

		$data = json_decode($response->getBody(), true);

		$this->assertEquals('Bird by Bird', $data['title']);
		$this->assertEquals('Anne Lamott', $data['author']);
		$this->assertEquals('The Book in Three Sentences: To become a better writer, you have to write more. Writing reveals the story because you have to write to figure out what you’re writing about. Don’t judge your initial work too harshly because every writer has terrible first drafts.',
			$data['description']);
	}
}
