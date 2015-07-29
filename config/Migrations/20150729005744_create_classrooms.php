<?php
use Phinx\Migration\AbstractMigration;

class CreateClassrooms extends AbstractMigration
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
        $table = $this->table('classrooms');
        $table->addColumn('grade', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('cycle', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('teacher_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('kid_id', 'string', [
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
        $table->addIndex([
            'kid_id',
        ], [
            'name' => 'BY_KID_ID',
            'unique' => false,
        ]);
        $table->create();
    }
}
