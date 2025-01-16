<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    {{-- {{ $articles }} --}}
    <div class="container mt-5">
        <h1 class="mb-3">Data Articles Table</h1>
        <a class="btn btn-primary fw-bold my-2 px-4" href="{{ route('view-portofolio') }}">BACK</a>
        <a class="btn btn-primary fw-bold my-2 px-4" href="{{ route('add-articles') }}">ADD ARTICLE</a>
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID Article</th>
                    <th>Title</th>
                    <th>Picture</th>
                    <th>Content</th>
                    <th>Tags</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Row 1 -->
                @foreach ($articles as $index => $article)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $article->title }}</td>
                        <td><img src="php-intro.jpg" alt="{{ $article->picture }}" class="img-thumbnail"
                                style="width: 100px;"></td>
                        <td>{{ $article->content }}</td>
                        <td>{{ $article->tags }}</td>
                        <td>{{ $article->created_at }}</td>
                        <td>{{ $article->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
