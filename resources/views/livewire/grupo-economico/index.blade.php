<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Grupos Econômicos') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('grupos_economicos.form') }}" wire:navigate>
            {{ __('Criar') }}
        </a>
    </div>
    <table class="text-white">
        <thead>
            <td>{{ __("#") }}</td>
            <td>{{ __("Nome") }}</td>
            <td>{{ __("Data de Criação") }}</td>
            <td>{{ __("Ações") }}</td>
        </thead>
    @foreach($gruposEconomicos as $grupoEconomico)
    <tr wire:key="{{ $grupoEconomico->id }}">
        <td>{{ $grupoEconomico->id }}</td>
        <td>{{ $grupoEconomico->nome }}</td>
        <td>{{ $grupoEconomico->created_at }}</td>
        <td>
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('grupos_economicos.form', $grupoEconomico->id) }}" wire:navigate>
                {{ __('Editar') }}
            </a>
            <button
            type="button"
            wire:click="delete({{$grupoEconomico->id}})"
            wire:confirm="Are you sure you want to delete this post?"
        >
        {{ __('Excluir') }}
        </button>

        </td>
    </tr>
    @endforeach
    </table>
</div>
