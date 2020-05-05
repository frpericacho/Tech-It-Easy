<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
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
                'constraint' => 11,
                'unsigned' => true,
            ],
            'order_date' => [
                'type' => 'DATETIME',
            ],
            'ship_address' => [
                'type' => 'INT',
                'constraint' => 9,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', '`SET NULL`');
        $this->forge->addForeignKey('ship_address', 'address', 'id', 'CASCADE', '`SET NULL`');
        $this->forge->createTable('orders');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('orders');
    }
}
