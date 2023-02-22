

<form class="pt-3" action="{{ route ("admin.projects.store") }}" method="POST"> @csrf
  <div class="form-group row p-3">
    <label for="title" class="col-sm-2 col-form-label fw-bold">Titolo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Inserisci il titolo del progetto" name="title" value="{{ old('title' , $project->title)}}">
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror    
    </div>
  </div>
  <div class="form-group row p-3">
    <label for="description" class="col-sm-2 col-form-label fw-bold">Descrizione</label>
    <div class="col-sm-10">
      <textarea name="description" cols="30" rows="5" type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Inserisci la descrizione">{{ old('description' , $project->description)}}</textarea>
    @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror    
    </div>
  </div>
  <div class="form-group row p-3">
    <label for="category" class="col-sm-2 col-form-label fw-bold">Categoria</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" placeholder="Inserisci la categoria" name="category" value="{{ old('category' , $project->category)}}">
    @error('category')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror    
    </div>
  </div>
  <div class="form-group row p-3">
    <label for="year" class="col-sm-2 col-form-label fw-bold">Anno</label>
    <div class="col-sm-10">
      <input type="number" min="1995" max="2023" step="1" class="form-control @error('year') is-invalid @enderror"" id="year" placeholder="Inserisci l'anno di creazione" name="year" value="{{ old('year' , $project->year)}}">
    @error('year')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror    
    </div>
  </div>
  <div class="form-group row p-3">
    <label for="technology_used" class="col-sm-2 col-form-label fw-bold">Tecnologia Usata</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('technology_used') is-invalid @enderror" id="technology_used" placeholder="Inserisci che strumenti hai utilizzato" name="technology_used" value="{{ old('technology_used' , $project->technology_used)}}">
    @error('technology_used')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror    
    </div>
  </div>
  <div class="form-group row p-3">
    <label for="thumb" class="col-sm-2 col-form-label fw-bold">Immagine</label>
    <div class="col-sm-5">
      <input type="text" class="form-control @error('thumb') is-invalid @enderror"" id="thumb" placeholder="Inserisci un link per la tua immagine" name="thumb" value="{{ old('thumb' , $project->thumb)}}">
    @error('thumb')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror    
    </div>
    <label for="date" class="col-sm-1 col-form-label fw-bold">Data</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" id="date" placeholder="Inserisci la data d'inserimento progetto" name="date_added" value="{{ old('date_added' , $project->date_added)}}">
    </div>
  </div>
  <div class="form-group row p-3">
    <div class="col-sm-12">
      <a class="btn btn-secondary btn-sm" href="{{ route ("admin.projects.index") }}"><i class="fa-solid fa-chevron-left text-white"></i></a>
      <button type="submit" class="btn btn-success btn-sm">Salva</button>
    </div>
    
  </div>
</form>