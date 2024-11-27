{{-- Vista general de asistencia --}}
@extends('layouts.user_view')

@section('title', 'Asistencia')

@section('content')

	<!--Container-->
	<div class="container w-full px-2 text-center">
		<!--Title-->
		<!--Card-->
		<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-[#fdfcfd] text-gray-950 w-full">


			<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">Id</th>
						<th data-priority="2">Id Sucursal</th>
						<th data-priority="3">Fecha</th>
						<th data-priority="4">Entrada</th>
						<th data-priority="5">Salida</th>
						<th data-priority="6">Entrada 2</th>
						<th data-priority="7">Salida 2</th> 
						<th data-priority="8">Acción</th> 
					</tr>
				</thead>
				<tbody>
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
					
					<!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
					
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
				</tbody>
			</table>
		</div>
		<!--/Card-->
	</div>
	<!--/container-->





	<!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script>
		$(document).ready(function() {

			var table = $('#example').DataTable({
					responsive: true
				})
				.columns.adjust()
				.responsive.recalc();
		});
	</script>


</html>

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
		</tr>
	 @endslot

	 @slot('content_body')
		<tr>
			<td>1</td>
			<td>101</td>
			<td>2024-11-01</td>
			<td>08:00</td>
			<td>12:00</td>
			<td>13:00</td>
			<td>17:00</td>
		</tr>
		<tr>
			<td>2</td>
			<td>102</td>
			<td>2024-11-01</td>
			<td>08:30</td>
			<td>12:30</td>
			<td>13:30</td>
			<td>17:30</td>
		</tr>
		<tr>
			<td>3</td>
			<td>103</td>
			<td>2024-11-01</td>
			<td>09:00</td>
			<td>13:00</td>
			<td>14:00</td>
			<td>18:00</td>
		</tr>
		<tr>
			<td>4</td>
			<td>104</td>
			<td>2024-11-01</td>
			<td>07:45</td>
			<td>11:45</td>
			<td>12:45</td>
			<td>16:45</td>
		</tr>
		<tr>
			<td>5</td>
			<td>105</td>
			<td>2024-11-01</td>
			<td>08:15</td>
			<td>12:15</td>
			<td>13:15</td>
			<td>17:15</td>
		</tr>
		<tr>
			<td>6</td>
			<td>106</td>
			<td>2024-11-01</td>
			<td>09:30</td>
			<td>13:30</td>
			<td>14:30</td>
			<td>18:30</td>
		</tr>
		<tr>
			<td>7</td>
			<td>107</td>
			<td>2024-11-01</td>
			<td>07:30</td>
			<td>11:30</td>
			<td>12:30</td>
			<td>16:30</td>
		</tr>
		<tr>
			<td>8</td>
			<td>108</td>
			<td>2024-11-01</td>
			<td>08:45</td>
			<td>12:45</td>
			<td>13:45</td>
			<td>17:45</td>
		</tr>
		<tr>
			<td>9</td>
			<td>109</td>
			<td>2024-11-01</td>
			<td>09:15</td>
			<td>13:15</td>
			<td>14:15</td>
			<td>18:15</td>
		</tr>
		<tr>
			<td>10</td>
			<td>110</td>
			<td>2024-11-01</td>
			<td>08:00</td>
			<td>12:00</td>
			<td>13:00</td>
			<td>17:00</td>
		</tr>
		<tr>
			<td>11</td>
			<td>111</td>
			<td>2024-11-01</td>
			<td>08:30</td>
			<td>12:30</td>
			<td>13:30</td>
			<td>17:30</td>
		</tr>
		<tr>
			<td>12</td>
			<td>112</td>
			<td>2024-11-01</td>
			<td>09:00</td>
			<td>13:00</td>
			<td>14:00</td>
			<td>18:00</td>
		</tr>
		<tr>
			<td>13</td>
			<td>113</td>
			<td>2024-11-01</td>
			<td>07:45</td>
			<td>11:45</td>
			<td>12:45</td>
			<td>16:45</td>
		</tr>
		<tr>
			<td>14</td>
			<td>114</td>
			<td>2024-11-01</td>
			<td>08:15</td>
			<td>12:15</td>
			<td>13:15</td>
			<td>17:15</td>
		</tr>
		<tr>
			<td>15</td>
			<td>115</td>
			<td>2024-11-01</td>
			<td>09:30</td>
			<td>13:30</td>
			<td>14:30</td>
			<td>18:30</td>
		</tr>
	@endslot
 
 @endcomponent
@endsection

