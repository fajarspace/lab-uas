<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Antrian extends Migration
{
	public function up()
	{
		
		$this->forge->addField([
        'antrian_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
        ],
        'tanggal'       => [
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
