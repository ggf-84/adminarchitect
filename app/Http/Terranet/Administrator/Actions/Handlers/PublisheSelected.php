<?php

namespace App\Http\Terranet\Administrator\Actions\Handlers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Terranet\Administrator\AdminRequest;
use Terranet\Administrator\Traits\Actions\BatchSkeleton;
use Terranet\Administrator\Traits\Actions\Skeleton;

class PublisheSelected
{
    use Skeleton, BatchSkeleton;

    /**
     * Perform a batch action.
     *
     * @param Eloquent $entity
     * @param AdminRequest $request
     * @return mixed
     */
    public function handle(Eloquent $entity, AdminRequest $request)
    {
        $collection = $request->get('collection');

        $this->fetchSelected($entity, $collection)
            ->each(function (Eloquent $item) use ($request) {
                if ($this->canTransform($item, $request)) {
                    $item->published = 1;
                    $item->save();
                }

                return $item;
            });

        return $entity;
    }

    /**
     * @param  Eloquent  $entity
     * @param $collection
     * @return Collection
     */
    protected function fetchSelected(Eloquent $entity, $collection): Collection
    {
        return $entity->newQueryWithoutScopes()->find($collection);
    }

    /**
     * @param  Eloquent  $model
     * @param  AdminRequest  $request
     * @return bool
     */
    protected function canTransform(Eloquent $model, AdminRequest $request): bool
    {
        return $request->resource()->actions()->authorize('update', $model);
    }
}
