@extends('layouts.produtor')

@section('title', 'Dashboard Produtor | Agroway')

@section('conteudo')

<div class="space-y-6">

    <h1 class="text-2xl font-bold text-neutral-800">
        Bem-vindo, {{ auth()->user()->name ?? 'Produtor' }}
    </h1>

    <!-- CARDS -->
    <div class="grid md:grid-cols-3 gap-6">

        <div class="bg-white p-6 rounded-md shadow border">
            <p class="text-sm text-neutral-500">Produtos</p>
            <h3 class="text-2xl font-black text-green-800">12</h3>
        </div>

        <div class="bg-white p-6 rounded-md shadow border">
            <p class="text-sm text-neutral-500">Pedidos</p>
            <h3 class="text-2xl font-black text-green-800">8</h3>
        </div>

        <div class="bg-white p-6 rounded-md shadow border">
            <p class="text-sm text-neutral-500">Vendas</p>
            <h3 class="text-2xl font-black text-green-800">45.000 AOA</h3>
        </div>

    </div>

</div>

@endsection
