@extends('app')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Produtos</h1>
    <div>
        <a href="create" class="btn btn-primary mb-3">Adicionar produto</a>
    </div>     
    @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}  
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>SKU</td>
            <td>Modificado em</td>
            <td colspan = 2>Ações</td>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
<div>
</div>
@endsection 