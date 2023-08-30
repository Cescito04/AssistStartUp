@extends('layoutAdmin.app')

 @section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li  class="list-group-item">{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif

            <form action="{{route('user.store')}}" method="POST">
                @csrf
                <fieldset>
                <legend>Ajouter un Utilisateur</legend>
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" id="nom" class="form-control" placeholder="Nom" name="nom">
                </div>
                
            
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Email" name="email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Mot de passe" name="password">
                </div>
                
                
                <button type="submit" class="btn btn-primary">Sauver</button>
                <button class="btn btn-danger"><a class="nav-link" href="{{route('user.index')}}">Annuler</a></button>
                </fieldset>
          </form>
@endsection