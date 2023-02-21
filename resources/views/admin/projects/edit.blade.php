@extends('layouts.admin')

@section('content')

<div class="container">
    @include('admin.projects.partials.create_edit_form',['route'=> 'admin.projects.update', 'method'=> 'PUT', "project"=> $project])
</div>
  
@endsection