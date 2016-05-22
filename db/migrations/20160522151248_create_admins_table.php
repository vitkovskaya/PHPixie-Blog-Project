<?php

use Phinx\Migration\AbstractMigration;

class CreateAdminsTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('admins');
        $table->addColumn('username', 'string', ['limit' => 20])
            ->addColumn('passwordHash', 'string', ['limit' => 255])

            ->addIndex(['username'],['unique' => true])

            ->create();

        $table->insert([
            'username' => 'admin',
            'passwordHash' => '$2y$10$ZjrcQLxft5iHSIoCLG5jfO2h3ujdSoVTsrwywlDvhYGoq3q5V5pT6' // 123
        ]);

        $table->saveData();
    }

    public function down()
    {
        $this->dropTable('admins');
    }
}
