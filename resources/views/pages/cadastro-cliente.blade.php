@extends('layouts.system')
@section('content')
<div class="w-100 mb-3 mt-3">
    <div class="w-100 p-2">
        Cadastro de cliente
        <div class="float-right">
            <a href="#">
                <i class="icon-printer"></i> Imprimir
            </a>
            <a href="#" class="ml-2">
                <i class="icon-search"></i> Buscar
            </a>
        </div>
    </div>
    <br>

    <cadastro-cliente></cadastro-cliente>
</div>
@endsection