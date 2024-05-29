<div>
    <form action="{{ route('feeds.update', $feed->id) }}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <textarea name="content" class="form-control" id="idea" rows="3">{{ $feed->content }}</textarea>
            @error('content', 'contentErr')
                <span class="fs-6 text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="">
            <button class="btn btn-dark"> Update </button>
        </div>
    </form>
</div>
