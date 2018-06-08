<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

/**
 * Class UuidModelObserver
 *
 * @package App\Observers
 */
class UuidModelObserver
{
    /**
     * @param Model $model
     *
     * @return null
     */
    public function creating(Model $model)
    {
        $model->{$model->getKeyName()} = Uuid::uuid4()->toString();

        return null;
    }
}
