<div class="container mt-5">
    <!-- {{ $portofolios }} -->
    <h2 class="mb-4">Data Table Portofolio</h2>
    <a class="btn btn-primary mx-1 my-2 px-4" href="{{ route('add-portofolio') }}">ADD</a>
    <a class="btn btn-primary my-2 px-4" href="{{ route('view-articles') }}">List articles</a>
    @if (session()->has('success'))
    {{ session('success') }}
    
    @endif
    <table class="table table-striped table-bordered">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Picture</th>
          <th>Content</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <!-- Contoh data statis -->
        @foreach ($portofolios as $index => $porto)
        
        <tr>
          <td align="center">{{ $index+1 }}</td>
          <td width="200" align="center">{{ $porto->title }}</td>
          <td align="center" class="m-0">
            <img style="width: 200px;" src="{{ asset('storage/'. $porto->picture) }}" alt="Picture 1" class="img-fluid" width="100">
          </td>
          <td class="text-success" width="400">{{ $porto->content }}</td>
          <td align="center">
            <button class="btn btn-danger" wire:click="delete({{ $porto->id_porto }})">hapus</button>
            <a class="btn btn-primary" href="{{ route('edit-portofolio', $porto->id_porto) }}">edit</a>
          </td>
        </tr>

        @endforeach
      </tbody>
    </table>
  </div>