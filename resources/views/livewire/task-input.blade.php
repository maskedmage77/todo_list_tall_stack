<div>
    New Task
    <div class="flex gap-0 mt-2">
        <flux:input
            class="rounded-r-none"
            style="
            flex: 1;
            border-radius: 0.375rem 0 0 0.375rem;
            outline: none;
            box-shadow: none;
            "
            type="text"
            placeholder="Task name"
            wire:model="taskText"
            wire:keydown.enter="addTask"
        />
        <flux:button class="rounded-l-none cursor-pointer" wire:click="addTask">
            <i class="ph ph-plus"></i> Add
        </flux:button>
    </div>
</div>
