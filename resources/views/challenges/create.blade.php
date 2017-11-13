@extends('layouts.app')
@section('content')
	<div class="col-lg-10 col-lg-offset-1">
		<h1>Create a challenge</h1>



		<form action="{{ (route('challenges.store')) }}" method="post" class="form-horizontal" enctype="multipart/form-data">

			 {{ csrf_field() }}

			<h3>Title</h3>
			<div class="form-group @if($errors->has('title')) has-error @endif">
	            <div class="col-sm-8">
	                <input class="form-control" type="text" name="title">    
	                @if ($errors->has('title'))
	                <p class="help-block">{{ $errors->first('title') }}</p>
	                @endif
	            </div>
        	</div>

        	<br>
        	<h3>Introduction</h3>
        	<h4>A short introduction describing the challenge.</h4>
			<div class="form-group @if($errors->has('introduction')) has-error @endif">
	            <div class="col-sm-8">
	                <textarea class="form-control" name="introduction" rows="5"></textarea>
	                @if ($errors->has('introduction'))
	                <p class="help-block">{{ $errors->first('introduction') }}</p>
	                @endif
	            </div>
	        </div>

	        <br>
        	<h3>Body</h3>
        	<h4>The body of the challenge. Use Markdown for formatting.</h4>
			<div class="form-group @if($errors->has('body')) has-error @endif">
	            <div class="col-sm-8">
	                <textarea class="form-control" name="body" rows="10"></textarea>
	                @if ($errors->has('body'))
	                <p class="help-block">{{ $errors->first('body') }}</p>
	                @endif
	            </div>
	        </div>

	        <br>
        	<h3>Solution (optional)</h3>
        	<h4>If the challenge period is over, add a solution here. Use Markdown for formatting.</h4>
			<div class="form-group">
	            <div class="col-sm-8">
	                <textarea class="form-control" name="solution" rows="10"></textarea>
	            </div>
	        </div>




	        <br>
	        <button type="submit" class="btn btn-success">Save</button>

	    </form>

	</div>
@stop