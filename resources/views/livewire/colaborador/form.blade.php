<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Colaboradores') }}
        </h2>
    </x-slot>

    <form wire:submit="save">
        <!-- Nome -->
        <div class="mb-4">
            <x-input-label for="form.nome" :value="__('Nome')" />
            <x-text-input wire:model="form.nome" id="form.nome" class="block mt-1 w-full" type="text" name="form.nome" required autofocus value="{{ $form->colaborador->nome }}" />
            <x-input-error :messages="$errors->get('form.nome')" class="mt-2" />
        </div>

        <!-- E-mail -->
        <div class="mb-4">
            <x-input-label for="form.email" :value="__('E-mail')" />
            <x-text-input wire:model="form.email" id="form.email" class="block mt-1 w-full" type="text" name="form.email" required autofocus value="{{ $form->colaborador->email }}" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <!-- CPF -->
        <div class="mb-4">
            <x-input-label for="form.cpf" :value="__('CPF')" />
            <x-text-input wire:model="form.cpf" id="form.cpf" class="block mt-1 w-full" type="text" name="form.cpf" required autofocus value="{{ $form->colaborador->cpf }}" />
            <x-input-error :messages="$errors->get('form.cpf')" class="mt-2" />
        </div>

        <!-- Unidade -->
        <div>
            <x-input-label for="form.unidade" :value="__('Unidade')" />
            <x-select-input wire:model="form.unidade" id="form.unidade" class="block mt-1 w-full" name="form.unidade" :options="$unidades" :selected="$form->colaborador->unidade"/>
            <x-input-error :messages="$errors->get('form.unidade')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Salvar') }}
            </x-primary-button>
        </div>
    </form>
</div>
