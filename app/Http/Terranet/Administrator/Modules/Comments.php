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
use Terranet\Administrator\Field\Enum;
use Terranet\Administrator\Field\HasOne;

/**
 * Administrator Resource Comments
 *
 * @package Terranet\Administrator
 */
class Comments extends Scaffolding implements Navigable, Filtrable, Editable, Validable, Sortable, Exportable
{
    use HasFilters, HasForm, HasSortable, ValidatesForm, AllowFormats, AllowsNavigation;

    /**
     * The module Eloquent model
     *
     * @var string
     */
    protected $model = 'App\\Comment';

    public function columns(): MutableCollection
    {
        return $this
            ->scaffoldColumns()
            ->except(['user_id', 'post_id'])
            ->push(HasOne::make('user'))
            ->push(HasOne::make('post')->except(['user_id']));
    }

    public function form(): MutableCollection
    {
        $form = $this->scaffoldForm()
            ->update('user_id', function () {
                return Enum::make('User', 'user_id')
                    ->setOptions(
                        \App\User::pluck('name', 'id')
                    )
                    ->disableColors();
            })
            ->update('post_id', function () {
                return Enum::make('Post', 'post_id')
                    ->setOptions(
                        \App\Post::pluck('title', 'id')
                    )
                    ->disableColors();
            });
        return $form;
    }

    public function viewColumns(): MutableCollection
    {
        return $this->columns();
    }

    public function linkAttributes()
    {
        return ['icon' => 'fa fa-comments', 'id' => $this->url()];
    }

    public function order()
    {
        return 3;
    }
    public function group()
    {
        return "Articles";
    }
}
