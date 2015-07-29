<?php
use Phinx\Migration\AbstractMigration;

class CreateEvents extends AbstractMigration
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
        $table = $this->table('events');
        $table->addColumn('datestart', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('dateend', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('comment', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('teacher_id', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addIndex([
            'teacher_id',
        ], [
            'name' => 'BY_TEACHER_ID',
            'unique' => false,
        ]);
        $table->create();
    }
}
