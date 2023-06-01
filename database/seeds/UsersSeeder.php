<?php


use Phinx\Seed\AbstractSeed;

class UsersSeeder extends AbstractSeed
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
        $users = $this->table('users');
        $data = [];
        for($i = 0; $i < 15; $i++){
            $data[] = [
                'name' => $faker->userName(),
                'email' => $faker->email(),
                'password' => $faker->password(),
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }

        $users = $this->table('users');
        $users->insert($data)->save();
    }
}
