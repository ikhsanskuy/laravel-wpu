<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;
    protected $guarded = ['id'];
    
    public function posts(){
        return $this->hasMany(Post::class);
    }
}

// Post::create([
//     'title' => 'Judul tiga',
//     'category_id' => 3,
//     'slug' => 'judul-tiga',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolores architecto, aliquam ipsum fugiat quia accusantium assumenda, iusto, omnis beatae quasi dolorum modi error eaque molestias illo aut.',
//     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolores architecto, aliquam ipsum fugiat quia accusantium assumenda, iusto, omnis beatae quasi dolorum modi error eaque molestias illo aut. At veniam necessitatibus incidunt, aliquam hic dolorem? Deserunt impedit doloribus iste dolorum voluptate facere repudiandae. Rerum incidunt itaque maxime, eaque expedita delectus ab error eum fuga ipsum impedit alias veritatis voluptas velit perferendis reiciendis. Sequi autem vero numquam sunt adipisci enim cum, obcaecati veritatis, sed cumque itaque nemo aut. Mollitia omnis odio suscipit et delectus tempora ullam est quos atque quas nostrum eaque veritatis, earum sunt iste distinctio quaerat cum dolor unde.'
// ])