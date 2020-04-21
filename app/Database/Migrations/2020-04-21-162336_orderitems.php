<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orderitems extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 9,
                'null' => true,
            ],
            'prod_id' => [
                'type' => 'INT',
                'constraint' => 9,
                'null' => true,
            ],
            'amount' => [
                'type' => 'INT',
                'constraint' => 9,
            ],
        ]);
        $this->forge->addForeignKey('id', 'orders', 'id', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('prod_id', 'product', 'id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('orderitems');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('orderitems');
    }
}
