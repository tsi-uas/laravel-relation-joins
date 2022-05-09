<?php

namespace Halo\LaravelRelationJoins\Tests\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class EloquentSoftDeletingPolymorphicCommentModelStub extends EloquentPolymorphicCommentModelStub
{
    use SoftDeletes;
}
