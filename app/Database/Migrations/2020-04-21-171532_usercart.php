<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usercart extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'shoppingcart_id' => [
                'type' => 'INT',
				'constraint' => 9,
				'null' => true,
            ],
            'prod_id' => [
                'type' => 'INT',
				'constraint' => 9,
				'null' => true,
            ],
        ]);
        $this->forge->addForeignKey('shoppingcart_id', 'shoppingcart', 'id', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('prod_id', 'product', 'id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('usercart');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('usercart');
    }
}
