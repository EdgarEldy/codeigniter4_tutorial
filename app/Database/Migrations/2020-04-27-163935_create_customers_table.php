<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCustomersTable extends Migration
{
	public function up()
	{
		//
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'last_name' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'tel' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
        ]);
        $this->forge->addKey('id',TRUE);
        $this->forge->createTable('customers');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
        $this->forge->dropTable('customers');
	}
}
