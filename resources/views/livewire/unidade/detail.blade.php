<div class="text-white">
    <li>
        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('unidades.form', $unidade->id) }}" wire:navigate>
            {{ __('Editar') }}
        </a>
        <button
        type="button"
        wire:click="delete({{$unidade->id}})"
        wire:confirm="Are you sure you want to delete this post?"
    >
    {{ __('Excluir') }}
    </button></li>
    <li>{{ $unidade->nome_fantasia }}</li>
    <li>{{ $unidade->razao_social }}</li>
    <li>{{ $unidade->cnpj }}</li>
    <li>{{ $unidade->bandeira->nome }}</li>
    <li>{{ $unidade->created_at }}</li>
    <li>{{ $unidade->updated_at }}</li>
</div>
