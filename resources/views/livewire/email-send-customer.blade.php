<div class="d-flex align-items-center flex-column col-6 bg-secondary-subtle py-4">
    @if (session()->get('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
    <h2 class="text-center">Contact Us</h2>
    <form wire:submit.prevent='send' class="col-6 mt-3">
        <div>
            <label for="email">Subject</label> <br>
            <input class="form-control" type="text" name="subject" id="subject" wire:model='subject' placeholder="Enter The subject">
            @error('subject')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email">Email</label> <br>
            <input class="form-control" type="email" name="email" id="email" wire:model='email' placeholder="Enter your email">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="message">Message</label> <br>
            <textarea class="form-control" name="message" id="message" wire:model='message' placeholder="What do you want"></textarea>
            @error('message')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex align-items-center">
            <input type="submit" value="Kirim" class="btn btn-dark my-2 w-100">
            <div wire:loading wire:target='send' class="ms-2">
                <div class="spinner-border text-primary" role="">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </form>
</div>
