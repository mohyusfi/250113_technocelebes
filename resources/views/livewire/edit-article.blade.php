<form wire:submit.prevent="update">
    <!-- Title Input -->
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" wire:model="title" name="title" placeholder="Enter title">
        @error('title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="tags" class="form-label">Tags</label>
        <input type="text" class="form-control" id="title" wire:model="tags" name="tags" placeholder="Enter title">
        @error('tags')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Picture Input -->
    <div class="mb-3">
        <label for="picture" class="form-label">Picture</label>
        <input type="file" wire:model="picture" class="form-control" id="picture" name="picture"
            placeholder="Enter picture URL">
        @error('picture')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div id="toolbar" wire:ignore>
        <!-- Toolbar items: bold, italic, underline, etc. -->
        <button class="ql-bold">B</button>
        <button class="ql-italic">I</button>
        <button class="ql-underline">U</button>
        <button class="ql-strike">S</button>
        <button class="ql-link">Link</button>
        {{-- <button class="ql-image">Image</button> --}}
        {{-- <button class="ql-video">Video</button> --}}
    </div>
    <div wire:ignore name="content" id="editor-container" style="height: 200px; border: 1px solid #ccc;"></div>
    @error('content')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <!-- Submit Button -->
    <div class="mt-2">
      <button type="submit" class="btn btn-primary" id="save-button">Submit</button>
      <a class="btn btn-secondary" href="{{ route('view-articles') }}">Batal</a>
    </div>
</form>

<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

    document.addEventListener('livewire:load', () => {
        // Inisialisasi Quill Editor
        let quill = new Quill('#editor-container', {
            theme: 'snow',
            modules: {
                toolbar: '#toolbar'
            }
        });

        // Set nilai awal jika ada konten
        quill.root.innerHTML = @json($content); // $content adalah properti dari Livewire

        // Kirim data ke Livewire saat tombol "Save" diklik
        document.getElementById('save-button').addEventListener('click', () => {
            let htmlContent = quill.root.innerHTML;
            @this.set('content', htmlContent);
        });
    });
</script>
