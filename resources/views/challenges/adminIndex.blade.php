@extends('layouts.app')
@section('content')

<div class="col-lg-10 col-lg-offset-1">

	<h1><i class="fa fa-challenges"></i>Challenges
    	<a href="{{route('challenges.create')}}" class="btn btn-success pull-right">Add new challenge</a>
    </h1>
	<div class="table-responsive">
        <table class="table table-borderless">

            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Date updated</th>
                    <th>Date created</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($challenges as $challenge)
                <tr>
                    <td>{{ $challenge->title }}</td>
                    <td>{{ $challenge->creator }}</td>
                    <td>{{ $challenge->updated_at }}</td>
                    <td>{{ $challenge->created_at }}</td>
                    <td>
                    	<form action="{{ route('challenges.destroy', compact('challenge')) }}" method="POST" class="">
	                        {{ method_field('DELETE') }}
	                        {{ csrf_field() }}
	                        <button type="submit" class="btn btn-danger pull-right">Delete</button>
                    	</form>
                    	
                    	<a href="{{ route('challenges.edit', compact('challenge')) }}" class="btn btn-info pull-right">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop