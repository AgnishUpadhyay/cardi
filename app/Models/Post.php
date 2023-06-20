<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
// use Illuminate\Http\Request;



class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'image',
        'admin_id'
    ];
    protected $primaryKey = 'id';
    protected $guarded = ['id']; 

    public static function getHomepageListing()
    {
        $posts = Post::join('admin_users', 'posts.admin_id', '=', 'admin_users.id')
                ->select('posts.*', 'admin_users.name as admin_name', 'admin_users.avatar as admin_avatar')
                ->where('posts.released', 1)
                ->paginate(6);
        return $posts;
        // $categories = ;
        // return [$posts, $categories]; 
    }


    public function saveFormData(\Encore\Admin\Form $form)
    {
        $post = new Post();
        $post->title = $form->input('title');
        $post->excerpt = $form->input('excerpt');
        $post->content = $form->input('content');
        $post->image = $form->input('image');
        $released = $form->input('released') === 'off' ? 0 : 1;
        $post->released = $released;
        $post->admin_id = $form->input('admin_id');
        $post->save();

        $options = ($form->input('category_id'));
        // array_pop($options);
        // dd(gettype($options));
        foreach ($options as $option) {
            if (!empty($option) && !empty($post->id)) {
                DB::table('map')->insert([
                    'post_id' => $post->id,
                    'category_id' => $option
                ]);
            }
        }
        // if (!empty($options)) 
        // {
        //     foreach ($options as $option) {
        //         if(!empty($option) && !empty($post->id))
        //         {
        //             DB::table('map')->insert([
        //                 'post_id' => $post->id,
        //                 'category_id' => $option
        //             ]);
        //         }
        //     }
        // } 
        // else {
        //     throw new \Exception("Options field is required.");
        // }
    }
}

