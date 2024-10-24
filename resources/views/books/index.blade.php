<form action="{{ route('books.search') }}" method="GET">
    <input type="text" name="query" placeholder="Search for books" required>
    <button type="submit">Search</button>
</form>

@if($books->isNotEmpty())
    <ul>
        @foreach ($books as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>
@else
    <p>No books found matching your search.</p>
@endif
