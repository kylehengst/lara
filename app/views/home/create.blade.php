@extends('layouts.master')    

@section('content')

<h1>All Users</h1>

<p>{{ HTML::link('create','Add a New User') }}</p>

@if($users->count())
<table>
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
			<td>{{ $user->fname }}</td>
			<td>{{ $user->lname }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
	There are no users
@endif


@stop