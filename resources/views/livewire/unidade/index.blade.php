<div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('unidades.form') }}" wire:navigate>
            {{ __('Criar') }}
        </a>
    </div>
    <table class="text-white">
        <thead>
            <td>{{ __("#") }}</td>
            <td>{{ __("Nome Fantasia") }}</td>
            <td>{{ __("Razão Social") }}</td>
            <td>{{ __("CNPJ") }}</td>
            <td>{{ __("Bandeira") }}</td>
            <td>{{ __("Data de Criação") }}</td>
            <td>{{ __("Ações") }}</td>
        </thead>
    @foreach($unidades as $unidades)
    <tr wire:key="{{ $unidades->id }}">
        <td>{{ $unidades->id }}</td>
        <td>{{ $unidades->nome_fantasia }}</td>
        <td>{{ $unidades->razao_social }}</td>
        <td>{{ $unidades->cnpj }}</td>
        <td>{{ $unidades->bandeira->nome }}</td>
        <td>{{ $unidades->created_at }}</td>
        <td>
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('unidades.form', $unidades->id) }}" wire:navigate>
                {{ __('Editar') }}
            </a>
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('unidades.show', $unidades->id) }}" wire:navigate>
                {{ __('Visualizar') }}
            </a>
            <button
            type="button"
            wire:click="delete({{$unidades->id}})"
            wire:confirm="Are you sure you want to delete this post?"
        >
        {{ __('Excluir') }}
        </button>

        </td>
    </tr>
    @endforeach
    </table>
</div>
