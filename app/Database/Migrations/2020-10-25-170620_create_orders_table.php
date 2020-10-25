<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrdersTable extends Migration
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
            'customer_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ],
            'product_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ],
            'qty' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'total' => [
                'type' => 'FLOAT'
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->addForeignKey('customer_id','customers','id','cascade','cascade');
        $this->forge->createTable('orders');

        $this->db->enableForeignKeyChecks();
    }

    //--------------------------------------------------------------------

    public function down()
    {
        //
        $this->forge->dropTable('orders');
    }
}
