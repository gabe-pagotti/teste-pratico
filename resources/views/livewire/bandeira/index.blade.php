<div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('bandeiras.form') }}" wire:navigate>
            {{ __('Criar') }}
        </a>
    </div>
    <table class="text-white">
        <thead>
            <td>{{ __("#") }}</td>
            <td>{{ __("Nome") }}</td>
            <td>{{ __("Grupo Econômico") }}</td>
            <td>{{ __("Data de Criação") }}</td>
            <td>{{ __("Ações") }}</td>
        </thead>
    @foreach($bandeiras as $bandeira)
    <tr wire:key="{{ $bandeira->id }}">
        <td>{{ $bandeira->id }}</td>
        <td>{{ $bandeira->nome }}</td>
        <td>{{ $bandeira->grupo_economico->nome }}</td>
        <td>{{ $bandeira->created_at }}</td>
        <td>
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('bandeiras.form', $bandeira->id) }}" wire:navigate>
                {{ __('Editar') }}
            </a>
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('bandeiras.show', $bandeira->id) }}" wire:navigate>
                {{ __('Visualizar') }}
            </a>
            <button
            type="button"
            wire:click="delete({{$bandeira->id}})"
            wire:confirm="Are you sure you want to delete this post?"
        >
        {{ __('Excluir') }}
        </button>

        </td>
    </tr>
    @endforeach
    </table>
</div>
