<form wire:submit.prevent="create">
      <!-- Title Input -->
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" wire:model="title" name="title" placeholder="Enter title">
        @error('title')<span class="text-danger">{{ $message }}</span>@enderror 
      </div>

      <!-- Picture Input -->
      <div class="mb-3">
        <label for="picture" class="form-label">Picture</label>
        <input type="file" wire:model="picture" class="form-control" id="picture" name="picture" placeholder="Enter picture URL">
        @error('picture')<span class="text-danger">{{ $message }}</span>@enderror 
      </div>

      <!-- Content Textarea -->
      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" wire:model="content" id="content" name="content" rows="5" placeholder="Enter content"></textarea>
        @error('content')<span class="text-danger">{{ $message }}</span>@enderror 
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
