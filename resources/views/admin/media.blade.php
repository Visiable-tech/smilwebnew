@include('admin.common.header')

<div class="container">
    <h2>Media Manager</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('media.upload') }}" method="POST" enctype="multipart/form-data" class="dropzone" id="media-dropzone">
        @csrf
        <input type="file" name="file" required>
        <button class="btn btn-primary">Upload</button>
    </form>

    <hr>

    <div class="row">
        @foreach ($media as $item)
            <div class="col-md-3 mb-3">
                @if (Str::startsWith($item->file_type, 'image/'))
                    <img src="{{ asset($item->file_path) }}" class="img-thumbnail" width="100%">
                @else
                    <p>{{ $item->file_name }}</p>
                @endif

                <div class="mt-1">
                    <input type="text" value="{{ asset($item->file_path) }}" id="link-{{ $item->id }}" readonly class="form-control form-control-sm mb-1">
                    <button type="button" class="btn btn-sm btn-secondary" onclick="copyToClipboard({{ $item->id }})">Copy Link</button>
                </div>

                <form action="{{ route('media.delete', $item->id) }}" method="POST">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger mt-1">Delete</button>
                </form>
            </div>

        @endforeach
    </div>

    {{ $media->links() }}
</div>



@include('admin.common.footer')
