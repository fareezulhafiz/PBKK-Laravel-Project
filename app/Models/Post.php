<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [

            [
                'id' => 1,
                'slug' => 'mindfulness-a-key-to-mental-well-being-in-a-fast-paced-world',
                'title' => 'Mindfulness: A Key to Mental Well-Being in a Fast-Paced World',
                'author' => 'Fareezul Hafiz',
                'body' => 'In todays fast-paced world, maintaining mental well-being
                is crucial. Amid constant information and daily pressures, finding
                moments of peace through mindfulness can improve health. Practices
                like meditation, deep breathing, or a quiet walk help reduce stress,
                enhance focus, and promote calm. Prioritizing these small actions
                empowers us to navigate life with clarity'
            ],
            [
                'id' => 2,
                'slug' => 'simple-steps-towards-a-sustainable-lifestyle',
                'title' => 'Simple Steps Towards a Sustainable Lifestyle',
                'author' => 'Safia Khairunnisaq',
                'body' => 'Embracing a sustainable lifestyle is crucial. Simple changes like 
                reducing plastic use, conserving water, and choosing renewable energy significantly
                impact the environment. Buying locally sourced, organic products supports the local
                economy and ecosystems. Habits like recycling, composting, and using public
                transportation reduce our carbon footprint. Every small action contributes to a 
                healthier planet, paving the way for a sustainable future for generations to come.'
            ],
            [
                'id' => 3,
                'slug' => 'the-holistic-benefits-of-regular-exercise',
                'title' => 'The Holistic Benefits of Regular Exercise',
                'author' => 'Nurin Dahlia',
                'body' => 'Regular exercise benefits both physical and mental health. Activities like
                walking, running, or yoga release endorphins, enhancing mood and reducing stress.
                Exercise improves sleep, boosts energy, and increases focus. Establishing a
                routine with physical activity can help manage anxiety and depression. Incorporating
                exercise into daily life promotes a balanced and fulfilling lifestyle.'
            ]
        ];
    }

    public static function find($slug): array
    {

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

         if(!$post) {
            abort(404);
         }
    
         return $post;
    }
}