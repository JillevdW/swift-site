@extends('layouts.app')
@section('content')
	
<!-- Main content div -->	
<div class="col-lg-10 col-lg-offset-1">

    <h1><i class="fa fa-challenges"></i>{{ $challenge->title }}</h1>
    <br>

    <div class="col-lg-10">
	   	<h3>{{ $challenge->introduction }}</h3>
		<br>
		<section class="body">
        	@markdown($challenge->body)
    	</section>

	</div>

</div>

<!-- Solution div -->
<div class="col-lg-10 col-lg-offset-1">
	@if ($challenge->solution)
	<div class="col-lg-10">
		<h1>Solution</h1>
		<br>
		<section class="solution">
			@markdown($challenge->solution)
		</section>
	</div>
	@endif
</div>
@stop