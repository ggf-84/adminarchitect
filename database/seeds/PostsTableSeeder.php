<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('posts')->truncate();

        \DB::table('posts')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'user_id' => 1,
                    'title' => 'What is Lorem Ipsum?',
                    'body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                    'published' => 1,
                    'created_at' => '2020-07-19 12:35:16',
                    'updated_at' => '2020-07-19 12:35:16',
                ),
            1 =>
                array(
                    'id' => 2,
                    'user_id' => 1,
                    'title' => 'Why do we use it?',
                    'body' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                    'published' => 1,
                    'created_at' => '2020-07-19 12:35:16',
                    'updated_at' => '2020-07-19 12:35:16',
                ),
            2 =>
                array(
                    'id' => 3,
                    'user_id' => 1,
                    'title' => 'Where does it come from?',
                    'body' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32.",
                    'published' => 1,
                    'created_at' => '2020-07-19 12:35:16',
                    'updated_at' => '2020-07-19 12:35:16',
                ),
            3 =>
                array(
                    'id' => 4,
                    'user_id' => 2,
                    'title' => 'Where can I get some?',
                    'body' => "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the",
                    'published' => 1,
                    'created_at' => '2020-07-19 12:35:16',
                    'updated_at' => '2020-07-19 12:35:16',
                ),
            4 =>
                array(
                    'id' => 5,
                    'user_id' => 2,
                    'title' => 'The standard Lorem Ipsum passage, used since the 1500',
                    'body' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.",
                    'published' => 1,
                    'created_at' => '2020-07-19 12:35:16',
                    'updated_at' => '2020-07-19 12:35:16',
                ),
            5 =>
                array(
                    'id' => 6,
                    'user_id' => 1,
                    'title' => 'Section Finibus Bonorum et Malorum, written by Cicero in 45 BC',
                    'body' => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?",
                    'published' => 0,
                    'created_at' => '2020-07-19 12:35:16',
                    'updated_at' => '2020-07-19 12:35:16',
                ),
        ));
    }
}
