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
            ],
            'prod_id' => [
                'type' => 'INT',
                'constraint' => 9,
            ],
        ]);
        $this->forge->addForeignKey('shoppingcart_id', 'shoppingcart', 'id', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('prod_id', 'product', 'id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('shoppingcart');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('shoppingcart');
    }
}
