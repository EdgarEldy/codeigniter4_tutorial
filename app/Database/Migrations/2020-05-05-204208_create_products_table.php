<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
	public function up()
	{
		//
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'category_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ],
            'product_name' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'unit_price' => [
                'type' => 'INT',
                'constraint' => 11
            ]
        ]);
        $this->forge->addKey('id',TRUE);
        $this->forge->addForeignKey('category_id','categories','id','CASCADE','CASCADE');
        $this->forge->createTable('products');

        $this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
        $this->forge->dropTable('products');
	}
}
