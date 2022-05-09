<?php

namespace Halo\LaravelRelationJoins\Tests\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class EloquentSoftDeletingDepartmentModelStub extends EloquentDepartmentModelStub
{
    use SoftDeletes;
}
