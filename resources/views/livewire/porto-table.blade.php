<div class="container mt-5">
    <!-- {{ $portofolios }} -->
    <h2 class="mb-4">Data Table</h2>
    <a href="{{ route('add-portofolio') }}">add</a>
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
          <td>{{ $index+1 }}</td>
          <td>{{ $porto->title }}</td>
          <td>
            <img src="{{ asset('public/storage/'. $porto->picture) }}" alt="Picture 1" class="img-fluid" width="100">
          </td>
          <td>{{ $porto->content }}</td>
          <td>
            <button wire:click="delete({{ $porto->id_porto }})">hapus</button>
            <a href="{{ route('edit-portofolio', $porto->id_porto) }}">edit</a>
        </td>
        </tr>

        @endforeach
      </tbody>
    </table>
  </div>