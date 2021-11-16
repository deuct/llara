<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "title" => "Postingan Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Farhan Fadil",
            "body" => "
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, necessitatibus. Corporis et incidunt consequuntur fugit ducimus autem odio repellat architecto provident quidem? Enim, quasi provident? Velit natus atque eum sapiente repellendus aliquid dolore perferendis expedita doloribus, ratione ducimus porro vel reiciendis officiis placeat ipsa, dolorum quo in. Assumenda explicabo voluptates quisquam asperiores laboriosam odio ratione eos iusto suscipit vero, ab dolorem? Culpa non, in dolor architecto ipsum nam ex iste optio placeat nisi incidunt eos? Officia similique harum unde voluptas!"
        ],
        [
            "title" => "Postingan Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Malvin Kuncoro",
            "body" => "
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, necessitatibus. Corporis et incidunt consequuntur fugit ducimus autem odio repellat architecto provident quidem? Enim, quasi provident? Velit natus atque eum sapiente repellendus aliquid dolore perferendis expedita doloribus, ratione ducimus porro vel reiciendis officiis placeat ipsa, dolorum quo in. Assumenda explicabo voluptates quisquam asperiores laboriosam odio ratione eos iusto suscipit vero, ab dolorem? Culpa non, in dolor architecto ipsum nam ex iste optio placeat nisi incidunt eos? Officia similique harum unde voluptas!"
        ],
        [
            "title" => "Postingan Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Fahrul Rozi",
            "body" => "
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis dolore sit asperiores, sint error iste placeat dolores quod facilis! Nobis ipsum quas iste temporibus magnam dolore deserunt quidem accusamus vero nostrum repellendus libero eaque inventore soluta ut neque reprehenderit dicta, corrupti aspernatur provident pariatur facere numquam. Sed numquam delectus eaque?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug) 
    {
        $posts = static::all();
        return $posts -> firstWhere('slug', $slug);
    }

}
