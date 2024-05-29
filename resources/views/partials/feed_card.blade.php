<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                <div>
                    <h5 class="card-title mb-0"><a href="#"> Mario
                        </a></h5>
                </div>
            </div>

            <div>
                <form action="{{ route('feeds.destroy', $feed->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <a class="mx-2" href="{{ route('feeds.edit', $feed->id) }}">Edit</a>
                    <a href="{{ route('feeds.show', $feed->id) }}">View</a>
                <button class="btn btn-danger btn-sm ms-1" type="submit">X</button>
            </form>
        </div>
        </div>

        </div>

        <div class="card-body">
        <p class="fs-6 fw-light text-muted">
            {{ $feed->content }}
        </p>
        <div class="d-flex justify-content-between">
            <div>
                <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                    </span> {{ $feed->likes }} </a>
            </div>
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{ $feed->created_at }} </span>
            </div>
        </div>
        
        @include('shared.feed_comment')

    </div>
</div>
