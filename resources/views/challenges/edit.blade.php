@extends('layouts.app')
@section('content')
	<div class="col-lg-6 col-lg-offset-1">
		<h1>Edit challenge</h1>


		<form action="{{ (route('challenges.update', compact('challenge'))) }}" method="post" class="form-horizontal" enctype="multipart/form-data">

			{{ csrf_field() }}
			{{ method_field('put') }}

			<h3>Title</h3>
			<div class="form-group @if($errors->has('title')) has-error @endif">
	            <div class="col-sm-10">
	                <input class="form-control" type="text" name="title" value="{{ old('title') ? : $challenge->title }}">    
	                @if ($errors->has('title'))
	                <p class="help-block">{{ $errors->first('title') }}</p>
	                @endif
	            </div>
        	</div>

        	<br>
        	<h3>Introduction</h3>
        	<h4>A short introduction describing the challenge.</h4>
			<div class="form-group @if($errors->has('introduction')) has-error @endif">
	            <div class="col-sm-10">
	                <textarea class="form-control" name="introduction" rows="5">{{ old('introduction') ? : $challenge->introduction }}</textarea>
	                @if ($errors->has('introduction'))
	                <p class="help-block">{{ $errors->first('introduction') }}</p>
	                @endif
	            </div>
	        </div>

	        <br>
        	<h3>Body</h3>
        	<h4>The body of the challenge. Use Markdown for formatting.</h4>
			<div class="form-group @if($errors->has('body')) has-error @endif">
	            <div class="col-sm-10">
	                <textarea class="form-control" name="body" rows="10">{{ old('body') ? : $challenge->body }}</textarea>
	                @if ($errors->has('body'))
	                <p class="help-block">{{ $errors->first('body') }}</p>
	                @endif
	            </div>
	        </div>

	        <br>
        	<h3>Solution (optional)</h3>
        	<h4>If the challenge period is over, add a solution here. Use Markdown for formatting.</h4>
			<div class="form-group">
	            <div class="col-sm-10">
	                <textarea class="form-control" name="solution" rows="10">{{ old('solution') ? : $challenge->solution }}</textarea>
	            </div>
	        </div>




	        <br>
	        <button type="submit" class="btn btn-success">Update</button>

	    </form>

	</div>

	<div class="col-lg-5">
		<h1>Current text:</h1>
		<br>
		<h1><i class="fa fa-challenges"></i>{{ $challenge->title }}</h1>
		<br>
		<h3>{{ $challenge->introduction }}</h3>
		<br>
		@markdown($challenge->body)

		@if ($challenge->solution)
		<h1>Solution</h1>
		<br>
		@markdown($challenge->solution)
		@endif

	</div>
@stop