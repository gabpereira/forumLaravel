@extends ('layout')

@section ('content')
    <h1 class="text-center p-5">Create Theme</h1>
    <form method="POST" action="{{route('themes.store')}}">
        <label></label>
        <input type="submit" class="btn btn-primary">enregistrer</input>
        @csrf
    </form>
@endsection