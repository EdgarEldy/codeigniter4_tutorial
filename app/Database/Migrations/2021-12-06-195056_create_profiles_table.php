<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProfilesTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'profile_name' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ]
        ]);
        $this->forge->addKey('id',TRUE);
        $this->forge->createTable('profiles');
	}

	//--------------------------------------------------------------------

	public function down()
	{
        $this->forge->dropTable('profiles');
	}
}
