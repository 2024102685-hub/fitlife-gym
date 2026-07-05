<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMembersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'member_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'fullname' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'ic_no' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],

            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],

            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'address' => [
                'type' => 'TEXT',
            ],

            'member_type' => [
                'type' => 'ENUM',
                'constraint' => ['Individual', 'Family', 'Premium'],
            ],

            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],

            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('member_id', true);

        $this->forge->createTable('members');
    }

    public function down()
    {
        $this->forge->dropTable('members');
    }
}