<?php

namespace Halo\LaravelRelationJoins\Tests\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class EloquentSoftDeletingTagModelStub extends EloquentTagModelStub
{
    use SoftDeletes;
}
