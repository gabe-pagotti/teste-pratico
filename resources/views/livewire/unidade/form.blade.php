<div>
    <form wire:submit="save">
        <!-- Nome Fantasia -->
        <div>
            <x-input-label for="form.nome_fantasia" :value="__('Nome Fantasia')" />
            <x-text-input wire:model="form.nome_fantasia" id="form.nome_fantasia" class="block mt-1 w-full" type="text" name="form.nome_fantasia" required autofocus value="{{ $form->unidade->nome }}" />
            <x-input-error :messages="$errors->get('form.nome_fantasia')" class="mt-2" />
        </div>

        <!-- Razão Social -->
        <div>
            <x-input-label for="form.razao_social" :value="__('Razão Social')" />
            <x-text-input wire:model="form.razao_social" id="form.razao_social" class="block mt-1 w-full" type="text" name="form.razao_social" required autofocus value="{{ $form->unidade->nome }}" />
            <x-input-error :messages="$errors->get('form.razao_social')" class="mt-2" />
        </div>

        <!-- CNPJ -->
        <div>
            <x-input-label for="form.cnpj" :value="__('CNPJ')" />
            <x-text-input wire:model="form.cnpj" id="form.cnpj" class="block mt-1 w-full" type="text" name="form.cnpj" required autofocus value="{{ $form->unidade->nome }}" />
            <x-input-error :messages="$errors->get('form.cnpj')" class="mt-2" />
        </div>

        <!-- Bandeira -->
        <div>
            <x-input-label for="form.bandeira" :value="__('Bandeira')" />
            <x-select-input wire:model="form.bandeira" id="form.bandeira" class="block mt-1 w-full" name="form.bandeira" :options="$bandeiras" :selected="$form->unidade->bandeira"/>
            <x-input-error :messages="$errors->get('form.bandeira')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Salvar') }}
            </x-primary-button>
        </div>
    </form>
</div>
