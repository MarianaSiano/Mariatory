<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatePosts extends AbstractMigration
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
        $tab = $this->table('posts');
        $tab->addColumn('user_id', 'integer', ['signed' => false])
            ->addColumn('title', 'string')
            ->addColumn('synopsis', 'text')
            ->addColumn('review', 'text')
            ->addColumn('rating', 'enum', ['values' => ['1', '2', '3', '4', '5']])
            ->addColumn('image', 'string')
            ->addTimestamps()
            ->addForeignKey('user_id', 'users', 'id', ['delete' => 'RESTRICT', 'update' => 'NO_ACTION', 'constraint' => 'fk_posts_user_id_users'])
            ->save();
    }

    public function down(): void
    {
        $this->table('posts')->drop()->save();
    }
}
