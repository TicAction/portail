<?php
use Phinx\Migration\AbstractMigration;

class CreateHomeworks extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('homeworks');
        $table->addColumn('datestart', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('dateend', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('content', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('teacher_id', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
