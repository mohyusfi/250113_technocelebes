<div>
    <form wire:submit.prevent='subscribe' class="d-flex flex-column align-items-center">
        @if (session()->has('success'))
            <p class="text-success"> {{ session('success') }} </p>
        @endif
        @error('email')
            <p class="text-danger"> {{ $message }} </p>
        @enderror
        <div>
            <input type="email" name="email" id="email" wire:model='email' class="form-control" placeholder="example@gmail.com">
        </div>
        <button type="submit" class="btn bg-danger text-light">Subsribe</button>
    </form>
</div>
