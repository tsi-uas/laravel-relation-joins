<?php

namespace Halo\LaravelRelationJoins\Tests\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class EloquentSoftDeletingPostModelStub extends EloquentPostModelStub
{
    use SoftDeletes;
}
