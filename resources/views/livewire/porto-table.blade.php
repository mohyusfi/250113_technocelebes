<div class="container mt-2">
    {{-- {{ $portofolios }} --}}
    <h2 class="mb-4">Data Table Portofolio</h2>
    <a class="btn btn-primary mx-1 my-2 px-4" href="{{ route('add-portofolio') }}">ADD</a>
    <a class="btn btn-primary my-2 px-4" href="{{ route('view-articles') }}">List articles</a>
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="d-flex justify-content-end">
        {{ $portofolios->links('vendor.pagination.bootstrap-4', ['scrollTo' => false]) }}
    </div>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Picture</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Contoh data statis -->
            @foreach ($portofolios as $index => $porto)
                <tr>
                    <td align="center">{{ $porto->id_porto }}</td>
                    <td width="200" align="center">{{ $porto->title }}</td>
                    <td align="center" class="m-0" style="width: 15em">
                        <img style="width: 200px;" src="{{ asset('storage/' . $porto->picture) }}" alt="Picture 1"
                            class="img-fluid rounded-3 w-50">
                    </td>
                    <td class="text-black" width="200">{!! strip_tags(Str::limit($porto->content, 300)) !!}</td>
                    <td align="center">
                        <button class="btn btn-danger" wire:click="delete({{ $porto->id_porto }})">hapus</button>
                        <a class="btn btn-primary" href="{{ route('edit-portofolio', $porto->id_porto) }}">edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
