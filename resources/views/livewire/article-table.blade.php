<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    {{-- {{ $articles }} --}}
    <div class="container mt-5">
        <h1 class="mb-3">Data Articles Table</h1>
        <a class="btn btn-primary my-2 px-4" href="{{ route('view-portofolio') }}">BACK</a>
        <a class="btn btn-primary my-2 px-4" href="{{ route('add-articles') }}">ADD ARTICLE</a>
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="d-flex justify-content-end">
            {{ $articles->links('vendor.pagination.bootstrap-4', ['scrollTo' => false]) }}
        </div>

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID Article</th>
                    <th>Title</th>
                    <th>Picture</th>
                    <th>Content</th>
                    <th>Tags</th>
                    {{-- <th>Created At</th> --}}
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Row 1 -->
                @foreach ($articles as $index => $article)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $article->title }}</td>
                        <td><img src="{{ asset('storage/' . $article->picture) }}" alt="{{ $article->picture }}"
                                style="max-width: 100px;"></td>
                        <td style="max-width: 200px;">{!! $article->content !!}</td>
                        <td>{{ $article->tags }}</td>
                        {{-- <td>{{ $article->created_at }}</td> --}}
                        <td>{{ $article->updated_at }}</td>
                        <td>
                            <button class="btn btn-danger"
                                wire:click="delete({{ $article->id_article }})">delete</button>
                            <a class="btn btn-primary"
                                href="{{ route('edit-articles', $article->id_article) }}">edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
