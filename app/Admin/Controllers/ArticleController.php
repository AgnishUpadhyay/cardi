<?php

namespace App\Admin\Controllers;

use App\Models\Post;
use App\Models\PostType;
use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Encore\Admin\Form;
use Encore\Admin\Form\Field\MultipleSelect;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;


class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Upload your article';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post());
        $grid->title();
        $grid->excerpt();
        $grid->column('content')->display(function($val)
        {
            return substr($val, 0, 200);
        });
        $grid->column('image', __('Thumbnail'))->image('', '50', '50');
        $grid->column('released')->bool();
        $grid->filter(function($filter)
        {
            $filter->disableIdFilter();
            $filter->like('title');
        });
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Post::findOrFail($id));
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {   
        $form = new Form(new Post());
        $categories = PostType::get();
        $options = [];
        foreach($categories as $row){
            if ($row['status'] == 1) {
                $options[$row['id']] = $row['title'];
            }
        }
        // $form->setAction('/admin/articles/store');
        $form->text('title', __('Title'))->required();
        $form->text('excerpt', __('Excerpt'));
        $form->UEditor('content', __('Content'))->required();
        $form->image('image', __('Display Picture'));
        $states = [
            'on'=>['value'=>1, 'text'=>'Live'],
            'off'=>['value'=>0, 'text'=>'Draft']
            ];
        $form->switch('released', __('Status'))->states($states);
        $adminId = Auth::id();
        $form->hidden('admin_id')->value($adminId);

        // $form->multipleSelect('category_id', 'Options')->options($options)->required();

        // $form->saving(function (Form $form) {
        //     // $post = $form->model();
        //     // $post->
        //     $form->model()->saveFormData($form);
        // });
        return $form;
    }
}
