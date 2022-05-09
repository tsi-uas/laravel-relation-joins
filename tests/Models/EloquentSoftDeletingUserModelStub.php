<?php

namespace Halo\LaravelRelationJoins\Tests\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class EloquentSoftDeletingUserModelStub extends EloquentUserModelStub
{
    use SoftDeletes;
}
