<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bandeiras') }}
        </h2>
    </x-slot>

    <form wire:submit="save">
        <!-- Nome -->
        <div class="mb-4">
            <x-input-label for="form.nome" :value="__('Nome')" />
            <x-text-input wire:model="form.nome" id="form.nome" class="block mt-1 w-full" type="text" name="form.nome" required autofocus value="{{ $form->bandeira->nome }}" />
            <x-input-error :messages="$errors->get('form.nome')" class="mt-2" />
        </div>

        <!-- Grupo Economico -->
        <div>
            <x-input-label for="form.grupoEconomico" :value="__('Grupo Economico')" />
            <x-select-input wire:model="form.grupoEconomico" id="form.grupoEconomico" class="block mt-1 w-full" name="form.grupoEconomico" :options="$gruposEconomicos" :selected="$form->bandeira->grupo_economico"/>
            <x-input-error :messages="$errors->get('form.grupoEconomico')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Salvar') }}
            </x-primary-button>
        </div>
    </form>
</div>
