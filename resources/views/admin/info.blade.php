@extends('layouts.app')

@section('title', 'Infos')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Présentation</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Adresse</th>
                    <th>email</th>
                    <th>jourOuvert</th>
                    <th>heurOuvert</th>
                    <th>contact</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($infos as $info)
                    <tr>
                        <td>{{$info->adresse}}</td>
                        <td>{{$info->email}}</td>
                        <td>{{$info->jourOuvert}}</td>
                        <td>{{$info->heurOuvert}}</td>
                        <td>{{$info->contact}}</td>
                        <td>
                            <button class="btn btn-primary edit-btn"     data-toggle="modal" data-target="#editProductModal-{{$info->id}}"><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>

              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    <div class="modal fade" id="editProductModal-{{$info->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel-{{$info->id}}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Éditer infos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm" action="{{route('editInfo',$info->id)}}" method="POST">
                        @csrf
                        <input type="hidden" id="editId">
                        <div class="form-group">
                            <label for="editTitle">Adresse</label>
                            <input type="text" class="form-control" id="editTitle" value="{{$info->adresse}}" name="adresse" required>
                        </div>
                        <div class="form-group">
                            <label for="editTitle">email</label>
                            <input type="text" class="form-control" id="editTitle" value="{{$info->email}}" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="editTitle">JourOuvert</label>
                            <input type="text" class="form-control" id="editTitle" value="{{$info->jourOuvert}}" name="jourOuvert" required>
                        </div>
                        <div class="form-group">
                            <label for="editTitle">HeureOuvert</label>
                            <input type="text" class="form-control" id="editTitle" value="{{$info->heurOuvert}}" name="heurOuvert" required>
                        </div>
                        <div class="form-group">
                            <label for="editTitle">Contact</label>
                            <input type="text" class="form-control" id="editTitle" value="{{$info->contact}}" name="contact" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @endforeach
</tbody>

</table>
</main><!-- End #main -->
