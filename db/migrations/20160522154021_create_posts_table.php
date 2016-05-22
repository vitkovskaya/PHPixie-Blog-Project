<?php

use Phinx\Migration\AbstractMigration;

class CreatePostsTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('blogPosts');
        $table->addColumn('title', 'string', ['limit' => 255])
            ->addColumn('slug', 'string', ['limit' => 255])
            ->addColumn('body', 'text')
            ->addColumn('createdAt', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('isPublished', 'boolean', ['default' => 0])
            ->addColumn('isMarkdown', 'boolean')

            ->addIndex(['slug'], ['unique' => true])

            ->create();

        $table->insert([
            'title' => 'What is Lorem Ipsum?',
            'slug' => 'what-is-lorem-ipsum',
            'body' => '**Lorem Ipsum** is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'isPublished' => 1,
            'isMarkdown' => 1
        ]);

        $table->saveData();
    }

    public function down()
    {
        $this->dropTable('blogPosts');
    }
}
