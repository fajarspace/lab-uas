<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelayanan extends Migration
{
	public function up()
	{
		$this->forge->addField([
        'pelayanan_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
        ],
        'pelayanan_name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
        ],
        'pelayanan_code'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
        ],
        'pelayanan_description' => [
                'type'           => 'TEXT',
                'null'           => TRUE,
        ],
    ]);
    $this->forge->addKey('pelayanan_id', TRUE);
    $this->forge->createTable('pelayanan');
	}

	public function down()
	{
		//
	}
}
