<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateComment extends AbstractMigration
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
        $tab = $this->table('comments');
        $tab->addColumn('user_id', 'integer', ['signed' => false])
            ->addColumn('post_id', 'integer', ['signed' => false])
            ->addColumn('comment_text', 'text')
            ->addTimestamps()
            ->addForeignKey('user_id', 'users', 'id', ['delete' => 'RESTRICT', 'update' => 'NO_ACTION', 'constraint' => 'fk_comments_user_id_users'])
            ->addForeignKey('post_id', 'posts', 'id', ['delete' => 'RESTRICT', 'update' => 'NO_ACTION', 'constraint' => 'fk_comments_post_id_posts'])
            ->save();       
    }

    public function down(): void
    {
        $this->table('comments')->drop()->save();
    }
}
