@extends('layouts.admin')

@section('content')
<div class="container">
            <div class="p-3 d-flex justify-content-end">
                <a class="btn btn-success btn-sm" href="{{ route ("admin.projects.create")}}"><i class="fa-solid fa-plus text-white"></i></a>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col" class="d-none d-md-table-cell">Descrizione</th>
                    <th scope="col" class="d-none d-md-table-cell">Categoria</th>
                    <th scope="col" class="d-none d-md-table-cell">Anno</th>
                    <th scope="col" class="d-none d-md-table-cell">Tecnologia</th>
                    <th scope="col" class="d-none d-md-table-cell">Immagine</th>
                    <th scope="col" class="d-none d-md-table-cell">Data</th>
                    <th scope="col" class="d-none d-md-table-cell"><i class="bi bi-pencil-fill"></i></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                  <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td class="">{{$project->title}}</td>
                    <td class="d-none d-md-table-cell w-25">{{ Str::limit($project->description,20)}}</td>
                    <td class="d-none d-md-table-cell">{{$project->category}}</td>
                    <td class="d-none d-md-table-cell">{{$project->year}}</td>
                    <td class="d-none d-md-table-cell w-25">{{$project->technology_used}}</td>
                    <td class="d-none d-md-table-cell"><img class="img-fluid rounded" src="{{$project->thumb}}" alt=""></td>
                    <td class="d-none d-md-table-cell w-25">{{$project->date_added}}</td>
                    <td>
                      <a href="{{ route("admin.projects.show", $project->id) }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-binoculars text-white"></i></a>
                    </td>
                    <td>
                      <form action="{{ route ("admin.projects.edit", $project->id) }}" method="GET">
                        
                        <button class="btn btn-warning btn-sm" type="submit"><i class="fa-solid fa-pen-to-square text-white"></i></button>
                      
                      </form>
                        
                    </td>
                    <td>
                        <form class="form-delete" data-element-name="{{ $project->title}}" action="{{ route('admin.projects.destroy', $project->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button  class="btn btn-danger btn-sm" type="submit"><i class="fa-solid fa-trash-can text-white"></i></button>
                        </form>
                    </td>
                    @endforeach
                  </tr>
                </tbody>
              </table>
        </div>
@endsection