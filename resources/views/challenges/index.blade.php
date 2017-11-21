@extends('layouts.app')
@section('content')
	
<div class="col-lg-10 col-lg-offset-1">

    <h1><i class="fa fa-challenges"></i>Challenges
    	@if (Auth::user()->role_id == 3)
    	<a href="{{url('/admin/challenges')}}" class="btn btn-success pull-right">Manage Challenges</a>
    	@endif
    	{{-- <a href="{{route('challenges.create')}}" class="btn btn-success pull-right">Add Challenges</a> --}}
    </h1>
    <br>

    <div class="col-lg-10">
	    @foreach ($challenges as $challenge)
	    <a href="{{ route('challenges.show', compact('challenge')) }}" style="color: grey" class="cardlink">
	    	<div class="card">
	    		<div class="container">
		    		<div class="row">
		    			<div class="col-lg-2">
		    				<img src="https://developer.apple.com/swift/images/swift-og.png" style="width: 100%">
		    			</div>
		    			<div class="col-lg-6">
							<span class="details">
								<h4><b>{{ $challenge->title }}</b></h4> 
								<p>{{ $challenge->introduction }}</p> 
							</span>
						</div>
					</div>
				</div>
			</div>
		</a>
		<br>
		@endforeach

	</div>

		
</div>

@stop