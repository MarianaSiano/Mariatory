<?php


use Phinx\Seed\AbstractSeed;

class PostsSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('pt_BR');
        $posts = $this->table('posts');
        $data = [];
        for($i = 0; $i < 15; $i++){
            $data[] = [
                'user_id' => ($faker->randomDigit() * $faker->randomDigit()) % 15 + 1,
                'title' => $faker->text(),
                'synopsis' => $faker->text(),
                'review' => $faker->text(),
                'rating' => $faker->randomDigit() % 5 + 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }

        $posts = $this->table('posts');
        $posts->insert($data)->save();
    }
}
