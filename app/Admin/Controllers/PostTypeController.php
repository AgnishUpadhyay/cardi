<?php

namespace App\Admin\Controllers;

use App\Models\PostType;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PostTypeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Categories';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PostType());
        $grid->title();
        $grid->column('status')->bool();
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
        $show = new Show(PostType::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PostType());
        $form->text('title', __('Title'))->required();
        $states = [
            'on'=>['value'=>1, 'text'=>'Active'],
            'off'=>['value'=>0, 'text'=>'Inactive']
            ];
        $form->switch('status', __('Status'))->states($states);
        return $form;
    }
}
