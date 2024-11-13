<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Relatório') }}
        </h2>
    </x-slot>

    <div>
        <div class="grid grid-flow-col justify-stretch gap-4 items-end mt-4 mb-4" >
            <div>
                <x-input-label for="busca" :value="__('Pesquisar')" />
                <x-text-input wire:model.live="busca" id="busca" class="block mt-1 w-full" type="text" name="busca" required autofocus value="{{ $busca }}" />
                <x-input-error :messages="$errors->get('busca')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="unidade" :value="__('Unidade')" />
                <x-select-input wire:model.live="unidade" id="unidade" class="block mt-1 w-full" name="unidade" :options="$unidades"/>
                <x-input-error :messages="$errors->get('unidade')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="bandeira" :value="__('Bandeira')" />
                <x-select-input wire:model.live="bandeira" id="bandeira" class="block mt-1 w-full" name="bandeira" :options="$bandeiras"/>
                <x-input-error :messages="$errors->get('bandeira')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="grupoEconomico" :value="__('Grupo Economico')" />
                <x-select-input wire:model.live="grupoEconomico" id="grupoEconomico" class="block mt-1 w-full" name="grupoEconomico" :options="$gruposEconomicos"/>
                <x-input-error :messages="$errors->get('grupoEconomico')" class="mt-2" />
            </div>
            <div class="pb-0.5">
            <button type="button" wire:click="exportar" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">{{ __('Exportar') }}</button>
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <th scope="col" class="px-6 py-3">{{ __("#") }}</td>
                <th scope="col" class="px-6 py-3">{{ __("Nome") }}</td>
                <th scope="col" class="px-6 py-3">{{ __("E-mail") }}</td>
                <th scope="col" class="px-6 py-3">{{ __("CPF") }}</td>
                <th scope="col" class="px-6 py-3">{{ __("Unidade") }}</td>
                <th scope="col" class="px-6 py-3">{{ __("Bandeira") }}</td>
                <th scope="col" class="px-6 py-3">{{ __("Grupo Econômico") }}</td>
            </thead>
            <tbdody>
                @forelse($colaboradores as $colaborador)
                <tr wire:key="{{ $colaborador->id }}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $colaborador->id }}</th>
                    <td class="px-6 py-4">{{ $colaborador->nome }}</td>
                    <td class="px-6 py-4">{{ $colaborador->email }}</td>
                    <td class="px-6 py-4">{{ $colaborador->cpf }}</td>
                    <td class="px-6 py-4">{{ $colaborador->unidade }}</td>
                    <td class="px-6 py-4">{{ $colaborador->bandeira }}</td>
                    <td class="px-6 py-4">{{ $colaborador->grupo_economico }}</td>
                </tr>
                @empty
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center" colspan="7">{{ __('Nenhum registro') }}</th>
                </tr>
                @endforelse
            </tbdody>
        </table>
    </div>
    {{ $colaboradores->links() }}
</div>
