<?php

namespace Halo\LaravelRelationJoins\Tests\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class EloquentSoftDeletingUserHistoryModelStub extends EloquentUserHistoryModelStub
{
    use SoftDeletes;
}
