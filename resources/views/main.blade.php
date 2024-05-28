@extends('layout.layout')

@section('main-content')

    <div class="row">
        
        {{-- left section starts here --}}
        <div class="col-3">
            @include('component.leftsection')
        </div>
        {{-- left section starts here --}}


        {{-- middle section starts here --}}

            @include('component.middlesection')

        {{-- middle section ends here --}}

        
        {{-- right section ends here --}}
            @include('component.rightsection')
        {{-- right section ends here --}}
    
    </div>

@endsection
