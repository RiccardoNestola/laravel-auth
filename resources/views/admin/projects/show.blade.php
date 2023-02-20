@extends('layouts.admin')

@section('content')
 <div class="container my-5">
        <div class="row">
          <div class="col-md-6">
            <img src="{{$project->thumb}}" alt="Img" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="my-3">{{$project->title}}</h2>
            <p><strong>Descrizione</strong> {{$project->description}}</p>
            <p><strong>Categoria</strong> {{$project->category}}</p>
            <p><strong>Anno</strong> {{$project->year}}</p>
            <p><strong>Tecnologia usata</strong> {{$project->technology_used}}</p>
            <p><strong>ID:</strong>{{$project->id}}</p>
            

            <form class="d-inline-block" action="{{ route ("admin.projects.index") }}" method="GET">
                        
              <button class="btn btn-secondary btn-sm" type="submit"><i class="fa-solid fa-chevron-left text-white"></i></button>
            
            </form>


            <form class="d-inline-block" action="{{ route ("admin.projects.edit", $project->id) }}" method="GET">
                        
              <button class="btn btn-warning btn-sm" type="submit"><i class="fa-solid fa-pen-to-square text-white"></i></button>
            
            </form>


            <form class="d-inline-block form-delete" data-element-name="{{ $project->title}}" action="{{ route('admin.projects.destroy', $project->id)}}" method="POST">
              @csrf
              @method("DELETE")
              <button  class="btn btn-danger btn-sm" type="submit"><i class="fa-solid fa-trash-can"></i></button>
            </form>
          </div>



        </div>
      </div>

@endsection