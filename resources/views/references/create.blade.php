Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 
@gabpereira 
XCarrel
/
myforum
1
0
0
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
myforum/resources/views/references/create.blade.php
@XCarrel
XCarrel Have a proper reference create view
Latest commit aceff93 9 days ago
 History
 1 contributor
12 lines (11 sloc)  379 Bytes
  
@extends ('layout')

@section ('content')
    <form action="{{ route('references.store') }}" method="post">
        @csrf
        @include('references.form_body')
        <div class="row m-3">
            <button class="btn btn-success">Enregistrer</button>
            <a href="{{ url()->previous() }}" class="btn btn-primary">Annuler</a>
        </div>
    </form>
@endsection
© 2020 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
About
