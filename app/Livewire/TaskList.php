<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskList extends Component
{
    protected $listeners = ['taskAdded' => '$refresh'];

    public function toggleTask($taskId)
    {
        $task = Task::find($taskId);
        if ($task) {
            $task->completed = !$task->completed;
            $task->save();
        }
    }

    public function deleteTask($taskId)
    {
        $task = Task::find($taskId);
        if ($task) {
            $task->delete();
        }
    }

    public function render()
    {
        $completedTasks = Task::where('completed', true)->get();
        $uncompletedTasks = Task::where('completed', false)->get();

        return view('livewire.task-list', [
            'completedTasks' => $completedTasks,
            'uncompletedTasks' => $uncompletedTasks,
        ]);
    }
}
