<div>
	<table>
		<thead>
			<tr>
				<th>Full_Name</th>
				<th>Company_Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>re-type_password</th>
				<th>Type_of_goods</th>
				<th>Space_Required</th>
				<th>action</th>
			</tr>
		</thead>
		<tbody>

			@foreach($merches as $merch)
			
			<tr>
				<td>{{ $merch->Full_Name }}</td>
				<td>{{ $merch->Company_Name }}</td>
				<td>{{ $merch->Email }}</td>
				<td>{{ $merch->Password }}</td>
				<td>{{ $merch->Type_of_goods }}</td>
				<td>{{ $merch->Space_Required }}</td>
				<td>{{ $merch->file }}</td>
				</tr>
				
			@endforeach
		</tbody>
	</table>
</div>

<!-- if('Exhibition_Name' == merch->$Exhibition_Name) -->