<?php

use Illuminate\Database\Seeder;
use \App\Article;
use \Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO `pages` (`name`, `content`) VALUES (?,?)',
            [
                'default.articles',
                '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam commodi dicta dignissimos dolor eveniet nesciunt ratione repellendus sint sit tempore? Facere, incidunt inventore mollitia nemo qui recusandae rem? Accusamus alias aliquid animi at blanditiis consequuntur cum dicta id ipsum non perferendis quaerat quia, unde? Fugit ipsum libero odit quibusdam tenetur!</p>'
            ]);

        DB::table('pages')->insert(
            [
                [
                    'name' => 'default.articles',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam aspernatur atque beatae corporis cumque, doloremque eaque, earum facere, hic in ipsum itaque laboriosam laborum neque nostrum officiis omnis perferendis quas repellendus tempora tenetur totam ullam unde! Ab, aliquid autem blanditiis consequuntur culpa dolor dolorem expedita hic id, itaque laborum laudantium maxime molestiae nostrum omnis optio pariatur quidem quo ratione recusandae repudiandae sit tenetur. Inventore non officiis quisquam totam. Ab adipisci asperiores consequatur debitis dolores, ducimus est expedita fugit illo in ipsa itaque laudantium magnam molestiae necessitatibus obcaecati pariatur quae quas reprehenderit rerum saepe sunt vel veniam, voluptas voluptatem.</p>'
                ],

                [
                    'name' => 'default.articles',
                    'content' => '<p>Ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam aspernatur atque beatae corporis cumque, doloremque eaque, earum facere, hic in ipsum itaque laboriosam laborum neque nostrum officiis omnis perferendis quas repellendus tempora tenetur totam ullam unde! Ab, aliquid autem blanditiis consequuntur culpa dolor dolorem expedita hic id, itaque laborum laudantium maxime molestiae nostrum omnis optio pariatur quidem quo ratione recusandae repudiandae sit tenetur. Inventore non officiis quisquam totam. Ab adipisci asperiores consequatur debitis dolores, ducimus est expedita fugit illo in ipsa itaque laudantium magnam molestiae necessitatibus obcaecati pariatur quae quas reprehenderit rerum saepe sunt vel veniam, voluptas voluptatem.</p>'
                ]
            ]
        );

//        Article::create([
//            'name' => 'default.articles',
//            'content' => 'Hello World'
//        ]);

    }
}
