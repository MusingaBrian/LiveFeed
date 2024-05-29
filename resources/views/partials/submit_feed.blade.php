<form action="{{ route('feeds.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <textarea name="feed" class="form-control" id="idea" rows="3"></textarea>
        @error('feed', 'feedErr')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="">
        <button class="btn btn-dark"> Share </button>
    </div>
</form>
