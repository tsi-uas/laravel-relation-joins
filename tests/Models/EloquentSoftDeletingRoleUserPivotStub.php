<?php

namespace Halo\LaravelRelationJoins\Tests\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class EloquentSoftDeletingRoleUserPivotStub extends EloquentRoleUserPivotStub
{
    use SoftDeletes;
}
