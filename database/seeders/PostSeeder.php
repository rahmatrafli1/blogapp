<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::insert([
            [
                'title' => 'The Future of Artificial Intelligence: Beyond 2024',
                'slug' => 'the-future-of-artificial-intelligence-beyond-2024',
                'author_id' => 2,
                'category_id' => 1,
                'body' => 'As we venture further into the 21st century, the landscape of artificial intelligence (AI) is evolving at an unprecedented pace. By 2024, AI has already transformed industries such as healthcare, finance, and transportation, bringing both exciting advancements and complex ethical dilemmas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artificial Intelligence and the Dawn of Industry 5.0: What\'s Next?',
                'slug' => 'artificial-intelligence-and-the-dawn-of-industry-5-0-what-s-next',
                'author_id' => 2,
                'category_id' => 1,
                'body' => 'Artificial intelligence (AI) continues to push the boundaries of innovation, and as we approach the era of Industry 5.0, this technology is expected to bring even more significant changes. Beyond automating tasks that once required human intervention, AI is now playing a pivotal role in fostering collaboration between humans and smarter, more empathetic machines.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Role of Artificial Intelligence in Healthcare: Revolutionizing Medical Science',
                'slug' => 'the-role-of-artificial-intelligence-in-healthcare-revolutionizing-medical-science',
                'author_id' => 1,
                'category_id' => 1,
                'body' => 'Artificial Intelligence (AI) has increasingly become a key player in the healthcare industry. By 2024, AI\'s influence on medical science is growing, with technologies like machine learning, natural language processing, and robotics driving innovations in diagnosis, treatment, and patient care.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Rise of Artificial Intelligence in Everyday Life',
                'slug' => 'the-rise-of-artificial-intelligence-in-everyday-life',
                'author_id' => 1,
                'category_id' => 1,
                'body' => 'Artificial Intelligence (AI) is rapidly becoming an integral part of our daily lives, revolutionizing the way we interact with technology and each other. From virtual assistants to smart home devices, AI is transforming various sectors, enhancing efficiency, and improving user experiences.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Future of Renewable Energy Technology',
                'slug' => 'the-future-of-renewable-energy-technology',
                'author_id' => 3,
                'category_id' => 1,
                'body' => 'As the world grapples with climate change and environmental degradation, renewable energy technology is emerging as a critical solution for sustainable development. Innovations in solar, wind, and battery storage technologies are paving the way for a greener future, reducing our dependence on fossil fuels.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Future of Air Transportation: Unmanned Aircraft and Advanced Technology',
                'slug' => 'the-future-of-air-transportation-unmanned-aircraft-and-advanced-technology',
                'author_id' => 3,
                'category_id' => 2,
                'body' => 'Air transportation is evolving with advanced technologies such as unmanned aircraft and more accurate navigation systems. This will improve safety, efficiency, and travel experience for passengers.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Revitalizing Rail Transportation: Improving Efficiency and Safety',
                'slug' => 'revitalizing-rail-transportation-improving-efficiency-and-safety',
                'author_id' => 3,
                'category_id' => 2,
                'body' => 'Rail transportation is undergoing revitalization with the use of advanced technologies such as automation systems and stricter security monitoring. This will improve efficiency, safety, and comfort for passengers.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Future of Sea Transportation: More Efficient and Environmentally Friendly Ships',
                'slug' => 'the-future-of-sea-transportation-more-efficient-and-environmentally-friendly-ships',
                'author_id' => 2,
                'category_id' => 2,
                'body' => 'Sea transportation is changing with the use of more efficient and environmentally friendly ships. This will reduce environmental impact and improve efficiency in goods transportation.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Advanced Highway Development Technology',
                'slug' => 'advanced-highway-development-technology',
                'author_id' => 1,
                'category_id' => 2,
                'body' => 'Highway development is undergoing changes with the use of advanced technologies such as more accurate traffic management systems and the use of more environmentally friendly materials.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Future of Public Transportation: Improving Accessibility and Efficiency',
                'slug' => 'the-future-of-public-transportation-improving-accessibility-and-efficiency',
                'author_id' => 3,
                'category_id' => 2,
                'body' => 'Public transportation is undergoing changes with the use of advanced technologies such as more accurate information systems and the use of more efficient vehicles.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
