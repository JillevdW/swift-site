@extends('layouts.app')
@section('content')
	
<div class="col-lg-10 col-lg-offset-1">

    <h1><i class="fa fa-challenges"></i>Challenges {{-- @guest @else  --}}<a href="{{route('challenges.create')}}" class="btn btn-success pull-right">Add Challenges</a> {{-- @endguest --}}</h1>
    <br>

    <div class="col-lg-10">
	    @foreach ($challenges as $challenge)
	    <a href="{{ route('challenges.show', compact('challenge')) }}" style="color: grey">
	    	<div class="card">
	    		<div class="row">
	    			<div class="col-lg-2">
	    				<img src="https://developer.apple.com/swift/images/swift-og.png" style="width: 100%">
	    			</div>
	    			<div class="col-lg-10">
				<span class="details">
					<h4><b>{{ $challenge->title }}</b></h4> 
					<p>{{ $challenge->introduction }}</p> 
				</span>
				<a href="{{ route('challenges.edit', compact('challenge')) }}" class="btn btn-info pull-left">Edit</a>
				</div>
				</div>
			</div>
		</a>
		<br>
		@endforeach

	</div>

		
</div>

@stop