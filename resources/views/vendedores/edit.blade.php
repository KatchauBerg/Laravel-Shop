<x-layout title="Editar Vendedor">
    <x-card-venda title="Editar Vendedor">
        <x-forms-vendedores.forms action="{{route('vendedores.update', $id_vendedor->id)}}" nome="{{$id_vendedor->nome}}" email="{{$id_vendedor->email}}" vendedor="{{$id_vendedor->id}}"/>
    </x-card-venda>
</x-layout>
