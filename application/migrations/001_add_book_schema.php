<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_book_schema extends CI_Migration
{

	public function up()
	{
		$this->dbforge->add_field(
			array(
				'id' => array(
					'type' => 'INT',
					'constraint' => 11,
					'unsigned' => TRUE,
					'auto_increment' => TRUE
				),
				'title' => array(
					'type' => 'VARCHAR',
					'constraint' => '100',
				),
				'author' => array(
					'type' => 'VARCHAR',
					'constraint' => '50',
				),
				'description' => array(
					'type' => 'TEXT',
					'null' => TRUE,
				),
			));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('title');
		$this->dbforge->create_table('book');
	}

	public function down()
	{
		$this->dbforge->drop_table('book');
	}
}
