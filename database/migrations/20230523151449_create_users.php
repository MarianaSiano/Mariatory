<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Action\AddColumn;

final class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up(): void
    {
        $tab = $this->table('users');
        $tab->addColumn('name', 'string')
            ->AddColumn('email', 'string')
            ->addColumn('password', 'string')
            ->addColumn('image', 'string') //Caminho da imagem
            ->addTimestamps()
            ->addIndex('email', ['unique' => true, 'name' => 'idx_users_email']) //Email único
            ->save();
    }

    public function down(): void{
        $this->table('users')->drop()->save();
    }
}
