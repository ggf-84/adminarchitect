<?php

namespace App\Http\Terranet\Administrator\Actions\Handlers;

use App\User;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Terranet\Administrator\Traits\Actions\ActionSkeleton;
use Terranet\Administrator\Traits\Actions\Skeleton;

class TogglePublished
{
    use Skeleton, ActionSkeleton;

    /**
     * Set action name.
     *
     * @param Eloquent $entity
     * @return string
     */
    public function name(Eloquent $entity)
    {
        return $entity->published ? 'Desactivate' : 'Activate';
    }

    /**
     * Update single entity.
     *
     * @param Eloquent $entity
     * @return mixed
     */
    public function handle(Eloquent $entity)
    {
        $entity->published = !$entity->published;
        $entity->save();

        return $entity;
    }

    /**
     * Set authorization logic.
     * Define who is authorized to manage this action.
     *
     * @param User $user
     * @param Eloquent $entity
     * @return boolean
     */
    public function authorize(User $user, Eloquent $entity)
    {
        # let's say: only super admins or post owners can toggle posts's active status.
        return  $user->id == $entity->user_id;
    }
}
