<div>
    <form wire:submit="save">
        <!-- Nome -->
        <div>
            <x-input-label for="form.nome" :value="__('Nome')" />
            <x-text-input wire:model="form.nome" id="form.nome" class="block mt-1 w-full" type="text" name="form.nome" required autofocus value="{{ $form->grupoEconomico->nome }}" />
            <x-input-error :messages="$errors->get('form.nome')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Salvar') }}
            </x-primary-button>
        </div>
    </form>
</div>
