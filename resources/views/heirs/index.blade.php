@extends('layouts.master')

@section('content')
<div class="container">
	<h1>Inheritance Calculator</h1>
	  	<h4><label class="my-1 mr-2">Deceased</label></h4>
	  	<select class="custom-select my-1 mr-sm-2" id="deceasedGender" onChange="changer();">
			<option selected>Choose...</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
	  	</select><hr>
	@if(count($heirs) > 0)
		<table class="table table-striped table-bordered">
  			<thead class="thead-dark">
				<tr>
					<th>Heir</th>
					<th>Qualification</th>
					<th width="30%">Count</th>
				</tr>
			</thead>
			@foreach($heirs as $heir)
				<tr>
					@if(in_array($heir->heir, ['Father', 'Mother', 'Husband']))
						<td><b>{{ $heir->heir }}</b></td>
						<td>{{ $heir->qualification }}</td>
						<td>
							<select class="custom-select" id="{{ $heir->heir }}Selector">
								<option value="No" selected>No</option>
								<option value="Yes">Yes</option>
							</select>
						</td>
					@else
						<td><b>{{ $heir->heir }}</b></td>
						<td>{{ $heir->qualification }}</td>
						<td>
							<select class="custom-select" id="{{ $heir->heir }}Selector">
								<option value="0" selected>0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</td>
					@endif
				</tr>
			@endforeach
		</table><hr>

		<table class="table table-striped table-bordered">
			<tr class="table-info">
				<th colspan="2">
					<input class="form-control" type="text" placeholder="Currency">
				</th>
				<th align="center" colspan="2">
					<center>
						<button type="button" class="btn btn-primary">Calculate Inheritance</button>
					</center>
				</th>
			</tr>
			<tr class="table-success">
				<th colspan="4"><center>Division of Inheritance</center></th>
			</tr>
			<tr>
				<td align="center">The Share of Sons</td>
				<td align="center">The Share of Daughters</td>
				<td align="center">The Share of Mother</td>
				<td align="center">The Share of Father</td>
			</tr>
			<tr>
				<td align="center">0</td>
				<td align="center">0</td>
				<td align="center">0</td>
				<td align="center">0</td>
			</tr>
			<tr>
				<td align="center">The Share of Brothers</td>
				<td align="center">The Share of Sisters</td>
				<td align="center">The Share of Husband</td>
				<td align="center">The Share of Wives</td>
			</tr>
			<tr>
				<td align="center">0</td>
				<td align="center">0</td>
				<td align="center">0</td>
				<td align="center">0</td>
			</tr>
			<tr>
				<td colspan="2" align="center">Remaining</td>
				<td colspan="2" align="center">0</td>
			</tr>
		</table>
	@else
		<p>There is no heir !</p>
	@endif
</div>
@endsection

<script>
	function changer() {
  		var selected = $('#deceasedGender option:selected').text();
    	if(selected == "Male"){
        	$('#HusbandSelector').prop('disabled', 'disabled'); 
        	$('#WivesSelector').prop('disabled', false); 
    	}else if(selected == "Female"){
        	$('#WivesSelector').prop('disabled', 'disabled'); 
        	$('#HusbandSelector').prop('disabled', false); 
    	}else{
        	$('#WivesSelector').prop('disabled', false); 
        	$('#HusbandSelector').prop('disabled', false); 
    	}
  };
</script>