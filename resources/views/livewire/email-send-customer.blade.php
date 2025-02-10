<div class="d-flex align-items-center flex-column">
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <h2 class="text-center">Ingin Bertanya Sesuatu?</h2>
    <form wire:submit.prevent='send'>
        <div>
            <label for="email">Your Email</label> <br>
            <input class="form-control" type="email" name="email" id="email" wire:model.defer='email'>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="message">message</label> <br>
            <textarea class="form-control" name="message" id="message" wire:model.defer='message'></textarea>
            @error('message')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex align-items-center">
            <input type="submit" value="Kirim" class="btn btn-success my-2">
            <div wire:loading wire:target='send' class="w-5 h-5 border-4 border-blue-500 border-t-transparent rounded-full animate-spin ms-2"></div>
        </div>
    </form>
</div>
