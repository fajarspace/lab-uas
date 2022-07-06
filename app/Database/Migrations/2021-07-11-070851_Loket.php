<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Loket extends Migration
{
	public function up()
	{
		$this->forge->addField([
        'loket_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
        ],
        'loket_name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
        ],
        'loket_pelayanan_id' => [
                'type'           => 'INT',
                'constraint'     => '11',
        ],
        'loket_description' => [
                'type'           => 'TEXT',
                'null'           => TRUE,
        ],
    ]);
    $this->forge->addKey('loket_id', TRUE);
    $this->forge->createTable('loket');
	}

	public function down()
	{
		//
	}
}
