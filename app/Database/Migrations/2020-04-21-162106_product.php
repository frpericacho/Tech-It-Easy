<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id' => [
                'type' => 'INT',
				'constraint' => 9,
				'auto_increment' => true,
			],
			'name' => [
                'type' => 'VARCHAR',
				'constraint' => 150,
			],
			'department' => [
                'type' => 'INT',
				'constraint' => 9,
			],
        ]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('department','department','id','SET NULL','CASCADE');
        $this->forge->createTable('product');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('product');
	}
}
