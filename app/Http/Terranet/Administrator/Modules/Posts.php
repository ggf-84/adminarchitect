<?php

namespace App\Http\Terranet\Administrator\Modules;

use Terranet\Administrator\Contracts\Module\Editable;
use Terranet\Administrator\Contracts\Module\Exportable;
use Terranet\Administrator\Contracts\Module\Filtrable;
use Terranet\Administrator\Contracts\Module\Navigable;
use Terranet\Administrator\Contracts\Module\Sortable;
use Terranet\Administrator\Contracts\Module\Validable;
use Terranet\Administrator\Scaffolding;
use Terranet\Administrator\Traits\Module\AllowFormats;
use Terranet\Administrator\Traits\Module\AllowsNavigation;
use Terranet\Administrator\Traits\Module\HasFilters;
use Terranet\Administrator\Traits\Module\HasForm;
use Terranet\Administrator\Traits\Module\HasSortable;
use Terranet\Administrator\Traits\Module\ValidatesForm;
use Terranet\Administrator\Collection\Mutable as MutableCollection;
use Terranet\Administrator\Field\HasOne;
use Terranet\Administrator\Field\HasMany;
use Terranet\Administrator\Field\Enum;

/**
 * Administrator Resource Posts
 *
 * @package Terranet\Administrator
 */
class Posts extends Scaffolding implements Navigable, Filtrable, Editable, Validable, Sortable, Exportable
{
    use HasFilters, HasForm, HasSortable, ValidatesForm, AllowFormats, AllowsNavigation;

    /**
     * The module Eloquent model
     *
     * @var string
     */
    protected $model = 'App\\Post';

    protected $unSortable = ['id','comments', 'user'];

    public function sortable()
    {
        return ['title'];
    }

    public function columns(): MutableCollection
    {
        return $this
            ->scaffoldColumns()
            ->except(['user_id', 'published'])
            ->push(HasOne::make('user'))
            ->push(HasMany::make( 'comments')->sortable(null));
    }

    public function form(): MutableCollection
    {

        $form = $this->scaffoldForm()

            ->update('body', function ($field) {
                return $field->tinymce();
            })
            ->update('user_id', function () {
                return Enum::make('User', 'user_id')
                    ->setOptions(
                        \App\User::pluck('name', 'id')
                    )
                    ->disableColors();
            });

        return $form;
    }

    public function viewColumns(): MutableCollection
    {
        return $this->columns()
            ->except(['comments'])
            ->push('published')
            ->move('published', 'after:body')
            ->push(HasMany::make( 'comments'), function($element){
                $element->renderAs(function ($field) {
                    $comments = $field->comments;
                    return view('admin.posts.comments',compact( 'comments'));
                });
                return $element;
            });
    }

    public function canDelete()
    {
        return false;
    }


    public function linkAttributes()
    {
        return ['icon' => 'fa fa-globe', 'id' => $this->url()];
    }

    public function group()
    {
        return "Articles";
    }
    public function order()
    {
        return 1;
    }

    public function perPage()
    {
        return 4;
    }
}
