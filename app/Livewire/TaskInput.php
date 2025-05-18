<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskInput extends Component
{
    public $taskText;

    public function addTask()
    {
        $this->validate([
            'taskText' => 'required|string|max:255',
        ]);

        Task::create(['text' => $this->taskText]);

        $this->taskText = '';

        $this->dispatch('taskAdded');
    }

    public function render()
    {
        return view('livewire.task-input');
    }
}
