<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class itemMigrado extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'titulo' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'subtitulo' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'json_autores' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'editorial' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'anio' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'resumen' => [
                'type'       => 'VARCHAR',
                'constraint' => '5000',
            ],
            'isbn_issn' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'paginas' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'urlPortada' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'pdf' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'json_dc_metadata' => [
                'type'       => 'VARCHAR',
                'constraint' => '2500',
            ],
            'marc_metadata' => [
                'type'       => 'VARCHAR',
                'constraint' => '2500',
            ],
            'id_dspace' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ],
            'fPublicacion' => [
                'type'       => 'DATE',
            ],
            'fModificado' => [
                'type'       => 'DATE',
            ],
            'fMigracion' => [
                'type'       => 'DATE',
            ],
            'importado' => [
                'type'       => 'smallint',
            ],
            'curado' => [
                'type'       => 'smallint',
                'default' => 0
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('itemMigrado');
    }

    public function down()
    {
        $this->forge->dropTable('itemMigrado');
    }
}
