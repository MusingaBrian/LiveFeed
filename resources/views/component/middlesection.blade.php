<div class="col-6">

    @include('partials.success_message')

    <h4> Share your feeds here </h4>

    <div class="row">

        @include('partials.submit_feed')

    </div>

    <hr>

        @foreach ($feeds as $feed )

            <div class="mt-3">
                @include('partials.feed_card')
            </div>
        
        @endforeach

</div>