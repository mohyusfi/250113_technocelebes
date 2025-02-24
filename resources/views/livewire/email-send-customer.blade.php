<div class="d-flex  flex-column col-12 col-md-6 py-4 contact">
    @if (session()->get('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
    <h2>Contact Us</h2>
    <hr>
    <form wire:submit.prevent='send' >
        <div>
            <label for="email">Subject :</label> <br>
            <input class="form-control" type="text" name="subject" id="subject" wire:model='subject' placeholder="Enter The subject">
            @error('subject')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email">Email :</label> <br>
            <input class="form-control" type="email" name="email" id="email" wire:model='email' placeholder="Enter your email">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="message">Message :</label> <br>
            <textarea class="form-control" name="message" id="message" wire:model='message' placeholder="What do you want"></textarea>
            @error('message')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex align-items-center">
            <input type="submit" value="Kirim" class="btn btn-dark my-2 w-50">
            <div wire:loading wire:target='send' class="ms-2">
                <div class="spinner-border text-primary" role="">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </form>
</div>
<style>
    .contact h2{
        color: white;
        border-radius: 50px;
        padding: 8px 15px;
        font-size: 50px;
    }
    label{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 25px;
        font-weight: bold;
        margin-top:20px;
        color: rgb(255, 255, 255);
        margin-bottom: 10px;
        background-color: rgb(3, 95, 0);
        padding: 8px 20px;
        width: 200px;
        border-radius: 50px;
        box-shadow: 5px 10px 20px rgba(0, 0, 0, 0.3);
    }
    .contact{
        background-color:rgb(56, 255, 49);
        border-radius: 30px;
        padding-left: 50px;
        padding-right: 50px;
    }
    .contact input{
        border: none;
        height: 50px;
    }
</style>
