<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Userlv extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 3,
			]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('userlv');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('userlv');
	}
}
