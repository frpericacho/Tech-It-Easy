<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserInfo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
                'unsigned' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'lastname' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'lv' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 1,
                'null' => true,
            ],
            'address' => [
                'type' => 'INT',
                'null' => true,
                'constraint' => 9,
            ],
            'email_id' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
        ]);
        $this->forge->addUniqueKey('user_id');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('lv', 'userlv', 'id', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('address', 'address', 'id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('user_info');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('user_info');
    }
}
