<?php

namespace Halo\LaravelRelationJoins\Tests\Unit;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Halo\LaravelRelationJoins\Tests\CustomBuilder;
use Halo\LaravelRelationJoins\Tests\Models\EloquentPostModelStub;
use Halo\LaravelRelationJoins\Tests\Models\EloquentUserModelStub;

class CustomBuilderTest extends TestCase
{
    /** @test */
    public function persists_across_models()
    {
        $builder = (new EloquentUserModelStub)->useCustomBuilder()->newQuery();

        $this->assertEquals(CustomBuilder::class, get_class($builder));

        $builder = (new EloquentPostModelStub)->newQuery();

        $this->assertEquals(CustomBuilder::class, get_class($builder));

        $builder = (new EloquentUserModelStub)->useCustomBuilder(false)->newQuery();

        $this->assertEquals(EloquentBuilder::class, get_class($builder));

        $builder = (new EloquentPostModelStub)->newQuery();

        $this->assertEquals(EloquentBuilder::class, get_class($builder));
    }

    /** @test */
    public function resets_after_test()
    {
        $builder = (new EloquentUserModelStub)->newQuery();

        $this->assertEquals(EloquentBuilder::class, get_class($builder));
    }
}
