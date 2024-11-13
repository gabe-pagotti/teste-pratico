<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Grupos Econômicos') }}
        </h2>
    </x-slot>

    <div>
        <div class="flex items-center justify-end mt-4 mb-4" >
            <a href="{{ route('grupos_economicos.form') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" wire:navigate>{{ __('Criar') }}</a>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <th scope="col" class="px-6 py-3">{{ __("#") }}</td>
                <th scope="col" class="px-6 py-3">{{ __("Nome") }}</td>
                <th scope="col" class="px-6 py-3">{{ __("Data de Criação") }}</td>
                <th scope="col" class="px-6 py-3">{{ __("Ações") }}</td>
            </thead>
            <tbdody>
                @foreach($gruposEconomicos as $grupoEconomico)
                <tr wire:key="{{ $grupoEconomico->id }}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $grupoEconomico->id }}</th>
                    <td class="px-6 py-4">{{ $grupoEconomico->nome }}</td>
                    <td class="px-6 py-4">{{ $grupoEconomico->created_at->format("d/m/Y H:i:s") }}</td>
                    <td class="px-6 py-4 flex">
                        <a class="underline dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('grupos_economicos.form', $grupoEconomico->id) }}" wire:navigate>
                            <img src="{{ asset('storage/icon-edit.svg') }}" class="w-6 h-6">
                        </a>
                        <button type="button" wire:click="delete({{$grupoEconomico->id}})" wire:confirm="Are you sure you want to delete this post?">
                            <img src="{{ asset('storage/icon-delete.svg') }}" class="w-6 h-6">
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbdody>
        </table>
    </div>
</div>
