<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Shoppingcart extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id' => [
                'type' => 'INT',
				'constraint' => 9,
				'auto_increment' => true,
			],
			'user_id' => [
                'type' => 'INT',
				'constraint' => 9,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('user_id','users','id','CASCADE','SET NULL');
        $this->forge->createTable('shoppingcart');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('shoppingcart');
	}
}
