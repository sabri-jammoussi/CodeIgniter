<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBlog extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'last_name'=>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'number'=>[
                'type' => 'INT',
                'constraint' => '8',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('post');
    }

    public function down()
    {
        $this->forge->dropTable('post');
    }
}
