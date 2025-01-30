<div class="p-5">
    <form wire:submit.prevent="create">
        <!-- Title Input -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" wire:model="title" name="title"
                placeholder="Enter title">
            @error('title')
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
        <div wire:ignore id="editor-container" style="height: 200px; border: 1px solid #ccc;"></div>
        @error('content')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <!-- Submit Button -->
        <div class="mt-2">
            <button type="submit" class="btn btn-primary" id="save-button">Submit</button>
            <a class="btn btn-warning" href="{{ Route('view-portofolio') }}">Back</a>
        </div>
    </form>
</div>

<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // Inisialisasi Quill Editor dengan Toolbar
    let quill = new Quill('#editor-container', {
        theme: 'snow', // Tema editor
        modules: {
            toolbar: '#toolbar' // Tentukan ID toolbar
        }
    });
    document.getElementById('save-button').addEventListener('click', () => {
        let htmlContent = quill.root.innerHTML; // Ambil konten sebagai HTML
        @this.set('content', htmlContent);
    });
</script>

<!-- Toolbar -->
