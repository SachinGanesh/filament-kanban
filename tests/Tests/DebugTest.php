<?php

use Mokhosh\FilamentKanban\Tests\Models\Task;
use Mokhosh\FilamentKanban\Tests\Pages\TestBoard;
use function Pest\Laravel\actingAs;

it('debug html', function () {
    config(['app.debug' => true]);
    
    // Let's try with withoutExceptionHandling
    $this->withoutExceptionHandling();
    
    $task = Task::factory()->create();
    
    $response = actingAs($this->admin)
        ->get(TestBoard::getUrl());
});
