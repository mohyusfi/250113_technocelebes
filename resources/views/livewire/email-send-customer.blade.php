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
            <input type="email" name="email" id="email" wire:model='email'>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="message">message</label> <br>
            <textarea name="message" id="message" wire:model='message'></textarea>
            @error('message')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" value="Kirim">
    </form>
</div>
