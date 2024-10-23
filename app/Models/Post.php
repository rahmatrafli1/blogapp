<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'title' => 'The Future of Artificial Intelligence: Beyond 2024',
                'slug' => 'the-future-of-artificial-intelligence-beyond-2024',
                'author' => 'Rahmat Rafli',
                'date' => '19 January 2024',
                'body' => 'As we venture further into the 21st century, the landscape of
            artificial intelligence (AI) is
            evolving at an
            unprecedented pace. By 2024, AI has already transformed industries such as healthcare, finance,
            and
            transportation, bringing both exciting advancements and complex ethical dilemmas.'

            ],
            [
                'title' => 'Artificial Intelligence and the Dawn of Industry 5.0: What’s Next?',
                'slug' => 'artificial-intelligence-and-the-dawn-of-industry-5-0-whats-next',
                'author' => 'Rahmat Rafli',
                'date' => '19 February 2024',
                'body' => 'Artificial intelligence (AI) continues to push the boundaries of innovation, and as
            we approach the era of Industry 5.0, this technology is expected to bring even more significant changes.
            Beyond automating tasks that once required human intervention, AI is now playing a pivotal role in fostering
            collaboration between humans and smarter, more empathetic machines.'
            ]
        ];
    }

    public static function find($slug): array
    {
        $posts = static::all();

        return Arr::first($posts, fn($post) => $post['slug'] === $slug) ?? abort(404);
    }
}
