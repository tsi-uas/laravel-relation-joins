<?php

namespace Halo\LaravelRelationJoins\Tests\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class EloquentSoftDeletingCountryModelStub extends EloquentCountryModelStub
{
    use SoftDeletes;
}
