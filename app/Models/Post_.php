<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Rizky Cavendio",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam pariatur voluptatem a commodi aliquam nesciunt est enim possimus dolorem asperiores soluta distinctio, modi doloremque quaerat excepturi fuga! Debitis maxime quae eveniet magni cumque veniam, nostrum a voluptatibus consectetur minus corrupti beatae rem. Voluptatem, deleniti? Maxime perferendis voluptatem assumenda expedita illum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Raisyal Fatihah",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint iusto totam quo, inventore incidunt blanditiis sit quas ab ipsa iste aperiam magnam cumque eos exercitationem ut fuga vel neque eaque eveniet accusamus minus maiores corrupti. Molestiae sit quia earum itaque tempore quae reprehenderit est, dolorem animi soluta, velit eius. Soluta ullam, est natus nesciunt deleniti provident fugit doloremque suscipit nemo cum illum. In ipsa vel possimus a saepe cum aliquid voluptatem ipsum, recusandae necessitatibus pariatur reprehenderit maxime, modi deserunt corporis laudantium numquam excepturi iste. Voluptatem distinctio repellat similique possimus delectus aliquid repellendus ab omnis! Facere commodi at quod, ipsum placeat rem quae aliquam dolores alias laboriosam temporibus adipisci nobis ad, necessitatibus tempora aperiam exercitationem cum? Quod tenetur harum, mollitia sequi unde perspiciatis quam quaerat cupiditate vel pariatur esse a odio quae, ex quia quidem culpa quos ab dignissimos minus illo. Aperiam porro autem numquam. Deleniti, quos consequatur quia debitis neque odio delectus impedit maxime alias id voluptatum dignissimos perspiciatis vero nobis in recusandae repudiandae! Dignissimos, alias? Veritatis quaerat tempore quas, molestias repellendus aliquam soluta veniam architecto libero minus nihil blanditiis quo voluptates aspernatur modi ipsum, dolores, dolor dicta voluptatem expedita aut. Ipsum vero at nihil maxime quos non harum impedit!"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
