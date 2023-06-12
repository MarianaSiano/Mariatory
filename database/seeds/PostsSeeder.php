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
                'author_post' => ($faker->randomDigit() * $faker->randomDigit()) % 15 + 1,
                'title' => '',
                'synopsis' => 'O livro Corte de Espinhos e Rosas (Acotar) traz uma envolvente história fictícia entre duas espécies, humanos e seres místicos chamados feéricos. Há muitos anos na história, uma guerra entre ambas as espécies foi declarada e por fim, os humanos conseguiram se libertar.',
                'review' => $faker->text(),
                'rating' => $faker->randomDigit() % 5 + 1,
                'author_book' => $faker->name,
                'gender' => $faker->name
            ];

            if($i%4 == 0){
                $data[$i]['title'] = 'Harry Potter e a Câmara Secreta';
            }else if($i%4 == 1){
                $data[$i]['title'] = 'Corte de Espinhos e Rosas';
            }else if($i%4 == 2){
                $data[$i]['title'] = 'A revolução dos Bichos';
            }else if($i%4 == 3){
                $data[$i]['title'] = 'Uma Breve História da Humanidade';
            }
        }

        $posts = $this->table('posts');
        $posts->insert($data)->save();
    }
}
