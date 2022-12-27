<?php

namespace Tests\Unit;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class ToDoList extends TestCase
{
    use RefreshDatabase;

    public function test_if_user_is_logged_in()
    {
        $task = factory(Task::class)->create(['done' => TRUE ]);
        $this->assertEquals(10 , $task);
    }


}
