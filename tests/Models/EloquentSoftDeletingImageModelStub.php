<?php

namespace Halo\LaravelRelationJoins\Tests\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class EloquentSoftDeletingImageModelStub extends EloquentImageModelStub
{
    use SoftDeletes;
}
