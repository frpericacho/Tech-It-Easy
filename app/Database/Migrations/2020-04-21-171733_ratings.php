<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ratings extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'rating' => [
                'type' => 'INT',
				'constraint' => 1,
			],
			'text' => [
                'type' => 'VARCHAR',
				'constraint' => 20,
			],
		]);
		$this->forge->addKey('rating', true);
        $this->forge->createTable('ratings');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('ratings');
	}
}
