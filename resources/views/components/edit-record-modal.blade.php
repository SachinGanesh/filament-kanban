<x-filament::modal id="kanban--edit-record-modal" :slideOver="$this->getEditModalSlideOver()" :width="$this->getEditModalWidth()" wire:submit.prevent="editModalFormSubmitted">
    <x-slot name="header">
        <x-filament::modal.heading>
            {{ $this->getEditModalTitle() }}
        </x-filament::modal.heading>
    </x-slot>

    {{ $this->form }}

    <x-slot name="footer">
        <x-filament::button type="submit">
            {{$this->getEditModalSaveButtonLabel()}}
        </x-filament::button>

        <x-filament::button color="gray" x-on:click="$dispatch('close-modal', { id: 'kanban--edit-record-modal' })">
            {{$this->getEditModalCancelButtonLabel()}}
        </x-filament::button>
    </x-slot>
</x-filament::modal>
