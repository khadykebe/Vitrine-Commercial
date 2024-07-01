@extends('layouts.app')

@section('title', 'Categories')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Categories</h1>

    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <button class="btn btn-success m-2 " data-toggle="modal" data-target="#addModal" >
                    <i class="fa fa-add" aria-hidden="true"></i>
                </button>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                    <tr>
                        <th>Categories</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                    <tbody>
                    @foreach($categories as $categorie)
                        <tr>
                            <td>{{$categorie->categorie}}</td>
                            <td>
                                <button class="btn btn-primary edit-btn"  data-id=""   data-toggle="modal" data-target="#editModal-{{$categorie->id}}"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger delete-btn" data-id="{{ $categorie->id }}" data-toggle="modal" data-target="#deleteModal-{{$categorie->id }}"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>


                        <div class="modal fade" id="deleteModal-{{$categorie->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel-{{$categorie->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form id="deleteForm" method="POST" action="{{route('deleteCategorie',$categorie->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Supprimer</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Voulez-vous vraiment supprimer ?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{-- edite --}}
                    <div class="modal fade" id="editModal-{{$categorie->id}}" tabindex="-1" role="dialog" aria-labelledby="editModal-{{$categorie->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form method="POST" action="{{ route('aditCategorie',$categorie->id) }}" >
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="categorie">Categorie</label>
                                            <input type="text" class="form-control" id="categorie" name="categorie" value="{{$categorie->categorie}}" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                        <button type="submit" class="btn btn-success">Ajouter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
{{-- add --}}
      <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('addcategorie') }}" >
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="categorie">Categorie</label>
                            <input type="text" class="form-control" id="categorie" name="categorie" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-success">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

