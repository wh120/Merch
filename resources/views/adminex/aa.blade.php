<div>
	<table>
		<thead>
			<tr>
				<th>Exhibition_Name</th>
				<th>Full_Name</th>
				<th>Mobile_Number</th>
				<th>Email</th>
				<th>Password</th>
				<th>Type_of_Exhibition</th>
				<th>Number_of_Attendees</th>
				<th>Number_of_Exhibiting_Companies</th>
				<th>Event_Budget</th>
				<th>action</th>
			</tr>
		</thead>
		<tbody>

			@foreach($exhibtions as $exhibtion )
			
			<tr>
				<td>{{ $exhibtion->Exhibition_Name }}</td>
				<td>{{ $exhibtion->Full_Name }}</td>
				<td>{{ $exhibtion->Mobile_Number }}</td>
				<td>{{ $exhibtion->Email }}</td>
				<td>{{ $exhibtion->Password }}</td>
				<td>{{ $exhibtion->Type_of_Exhibition }}</td>
				<td>{{ $exhibtion->Number_of_Attendees }}</td>
				<td>{{ $exhibtion->Number_of_Exhibiting_Companies }}</td>
				<td>{{ $exhibtion->Event_Budget }}</td>
				<td>
					<form method="POST" action="{{ route('Exhibtions.destroy', [$exhibtion->id]) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit">Delete</button>
					</form>
				</td>
				</tr>
				
			@endforeach
		</tbody>
	</table>
</div>

<!-- if('Exhibition_Name' == exhibtion->$Exhibition_Name) -->