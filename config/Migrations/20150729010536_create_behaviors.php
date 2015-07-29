<?php
use Phinx\Migration\AbstractMigration;

class CreateBehaviors extends AbstractMigration
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
        $table = $this->table('behaviors');
        $table->addColumn('date', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('behavior', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('kid_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
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
