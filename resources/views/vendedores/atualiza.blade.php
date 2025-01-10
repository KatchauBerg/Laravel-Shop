<x-layout title="Editar Vendedor">
    <x-card-venda title="Editar Vendedor">
        <x-forms-vendedores.forms action="{{'vendedores.update', $id_vendedor->id}}}" nome="{{$id_vendedor->nome}}" email="{{$id_vendedor->email}}"/>
    </x-card-venda>
</x-layout>
