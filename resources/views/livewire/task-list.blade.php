<div>
    <h1 class="text-2xl font-bold mb-4">My Tasks</h1>

    <h2 class="text-xl font-semibold mt-6 mb-2">To-Do</h2>
    @if ($uncompletedTasks->isEmpty())
        <p class="text-neutral-500 mb-4">No tasks to do!</p>
    @else
        <ul class="border-2 border-neutral-300 dark:border-neutral-800 rounded-lg divide-y-2 divide-neutral-200 dark:divide-neutral-800 overflow-hidden">
            @foreach ($uncompletedTasks as $task)
            <li class="flex items-center justify-between p-2.5 bg-white dark:bg-neutral-700">
            <span class="text-neutral-900 dark:text-neutral-100 truncate max-w-xs" >
                {{ $task->text }}
            </span>
            <button
                class="ml-2 bg-green-500 hover:bg-green-600 border-green-700 text-white rounded transition w-6 h-6 cursor-pointer"
                wire:click.prevent="toggleTask({{ $task->id }})"
            >
                <i class="ph ph-check"></i>
            </button>
            </li>
            @endforeach
        </ul>
    @endif

    <h2 class="text-xl font-semibold mt-6 mb-2">Completed</h2>
    @if ($completedTasks->isEmpty())
        <p class="text-neutral-500 mb-4">No completed tasks yet.</p>
    @else
        <ul class="border-2 border-neutral-300 dark:border-neutral-800 rounded-lg divide-y-2 divide-neutral-200 dark:divide-neutral-800 overflow-hidden">
            @foreach ($completedTasks as $task)
            <li class="flex items-center justify-between p-2.5 bg-white dark:bg-neutral-700">
                <span class="text-neutral-900 dark:text-neutral-100 truncate max-w-xs" >
                    {{ $task->text }}
                </span>
                <button
                    class="bg-red-500 hover:bg-red-600 border border-red-700 text-white rounded transition w-6 h-6 cursor-pointer"
                    wire:click.prevent="deleteTask({{ $task->id }})"
                >
                    <i class="ph ph-trash"></i>
                </button>
            </li>
            @endforeach
        </ul>

    @endif
</div>
