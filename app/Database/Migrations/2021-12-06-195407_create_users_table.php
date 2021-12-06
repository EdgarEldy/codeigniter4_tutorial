<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'profile_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ],
            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
			'last_name' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => '255'
			]
        ]);
        $this->forge->addKey('id',TRUE);
        $this->forge->addForeignKey('profile_id','profiles','id','CASCADE','CASCADE');
        $this->forge->createTable('users');

        $this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
