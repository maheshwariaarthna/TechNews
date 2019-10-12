@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row">
		@if($status)
			@if($status=='success')
			<div class="alert alert-success">
				Thank you for writing to us. We will get back to you within 48 hours.
			</div>
			@endif
			@if($status=='failure')
			<div class="alert alert-danger">
				Please try again.
			</div>
			@endif
		@endif
	</div>
</div>
<div class="container">
	<h2 class="text-center">REPORT TECHNICAL ISSUES</h2>
	<form method="POST" action="/report-technical-issues">
		{{ csrf_field() }}
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name" required="required" />
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required="required" />
			<small id="emailHelp" class="form-text text-muted">We'll never share your phone with anyone else.</small>
		</div>

		<div class="form-group">
			<label for="message">Issue</label>
			 <textarea class="form-control" id="message" name="message" rows="5"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection