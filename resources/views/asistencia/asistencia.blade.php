{{-- Vista general de asistencia --}}
@extends('layouts.user_view')

@section('title', 'Asistencia')

@section('content')

@section('h1')
	<h1 class="mb-10 mt-5 ml-4">Asistencia</h1>
@endsection


@component('_components.table')
	 @slot('content_head')
		<tr>
			<th data-priority="1">Id</th>
			<th data-priority="2">Id Sucursal</th>
			<th data-priority="3">Fecha</th>
			<th data-priority="4">Entrada</th>
			<th data-priority="5">Salida</th>
			<th data-priority="6">Entrada 2</th>
			<th data-priority="7">Salida 2</th> 
			<th data-priority="8">Acciones</th> 
		</tr>
	 @endslot

	 @slot('content_body')
	 <tr>
		<td>1</td>
		<td>1</td>
		<td>10-11-20</td>
		<td>7:10:25</td>
		<td>10:10:25</td>
		<td>5:10:25</td>
		<td>10:10:25</td>
		<td><a href="#" class="p-1.5 m-1.5 bg-[#0468BF] rounded font-bold text-[#fdfcfd] hover:bg-[#09487E]">Editar</a><a href="#" class="p-1.5 m-1.5 bg-rose-500 rounded font-bold text-[#fdfcfd] hover:bg-rose-700">Eliminar</a></td>
	</tr>

	<tr>
		<td>2</td>
		<td>1</td>
		<td>10-11-20</td>
		<td>7:10:25</td>
		<td>10:10:25</td>
		<td>13:10:25</td>
		<td>16:10:25</td>
		<td><a href="#" class="p-1.5 m-1.5 bg-[#0468BF] rounded font-bold text-[#fdfcfd] hover:bg-[#09487E]">Editar</a><a href="#" class="p-1.5 m-1.5 bg-rose-500 rounded font-bold text-[#fdfcfd] hover:bg-rose-700">Eliminar</a></td>
	</tr>
		
	@endslot
 
 @endcomponent
@endsection

