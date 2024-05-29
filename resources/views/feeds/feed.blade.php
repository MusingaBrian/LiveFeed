@extends('layout.layout')

@section('main-content')

    <div class="row">
        
        {{-- left section starts here --}}
        <div class="col-3">
            @include('component.leftsection')
        </div>
        {{-- left section starts here --}}


        {{-- middle section starts here --}}

        <div class="col-6">

            @include('partials.success_message')
        
            <h4> Share your feeds here </h4>
        
            <div class="row">
        
                @include('partials.submit_feed')
        
            </div>
        
            <hr>
                
                <div class="mt-3">
                    @include('partials.feed_card')
                </div>

        
                <div class="mt-3">
                   {{-- comments --}}
                </div>
        
        
        </div>

        {{-- middle section ends here --}}

        
        {{-- right section ends here --}}
            @include('component.rightsection')
        {{-- right section ends here --}}
    
    </div>

@endsection
