<?php

namespace Halo\LaravelRelationJoins\Tests\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class EloquentSoftDeletingCommentModelStub extends EloquentCommentModelStub
{
    use SoftDeletes;
}
