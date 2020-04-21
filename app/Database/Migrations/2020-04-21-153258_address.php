<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Address extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 9,
			],
			'Num' => [
                'type' => 'INT',
                'constraint' => '9',
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
			],
			'type' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
			],
			'postal_code' => [
                'type' => 'VARCHAR',
                'constraint' => '6',
            ],
            'city' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
            ],
            'province' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
			],
			'province' => [
                'type' => 'VARCHAR',
                'constraint' => '3',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('address');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('address');
	}
}
