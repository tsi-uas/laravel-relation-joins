<?php

namespace Halo\LaravelRelationJoins\Tests\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class EloquentSoftDeletingRoleModelStub extends EloquentRoleModelStub
{
    use SoftDeletes;
}
