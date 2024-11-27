{{-- Vista general de notificaciones --}}
@extends('layouts.user_view')

@section('title', 'Permisos')

@section('content')
@component('_components.table')

@slot('content_head')
   <tr>
       <th data-priority="1">Id</th>
       <th data-priority="2">Rol</th>
       <th data-priority="3">Descripción</th>
       <th data-priority="4">Acciones</th>
   </tr>
@endslot

@slot('content_body')
<tr>
   <td>1</td>
   <td>Usuario</td>
   <td>sgdngindsgsiig</td>
   <td><a href="#" class="p-1.5 m-1.5 bg-[#0468BF] rounded font-bold text-[#fdfcfd] hover:bg-[#09487E]">Editar</a><a href="#" class="p-1.5 m-1.5 bg-rose-500 rounded font-bold text-[#fdfcfd] hover:bg-rose-700">Eliminar</a></td>
</tr>

<tr>
    <td>2</td>
    <td>Administrador</td>
    <td>sgdngindsgsiig</td>
    <td><a href="#" class="p-1.5 m-1.5 bg-[#0468BF] rounded font-bold text-[#fdfcfd] hover:bg-[#09487E]">Editar</a><a href="#" class="p-1.5 m-1.5 bg-rose-500 rounded font-bold text-[#fdfcfd] hover:bg-rose-700">Eliminar</a></td>
 </tr> 

 <tr>
    <td>3</td>
    <td>RH</td>
    <td>sgdngindsgsiig</td>
    <td><a href="#" class="p-1.5 m-1.5 bg-[#0468BF] rounded font-bold text-[#fdfcfd] hover:bg-[#09487E]">Editar</a><a href="#" class="p-1.5 m-1.5 bg-rose-500 rounded font-bold text-[#fdfcfd] hover:bg-rose-700">Eliminar</a></td>
 </tr> 
@endslot

@endcomponent
@endsection