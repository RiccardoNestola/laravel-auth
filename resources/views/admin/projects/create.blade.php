@extends('layouts.admin')
@section('title', 'Crea nuovo progetto')
@section('content')

<div class="container">
    @include('admin.projects.partials.create_edit_form',['route'=> 'admin.projects.store','method'=>'POST', 'project'=> $project ])
</div>
  
@endsection