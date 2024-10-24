<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('{{ asset('img/book.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: repeat;
            height: 100vh;
            color: white;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            font-size: 1.1rem;
            margin-left: 15px;
        }

        .container {
            padding: 5px;
            background-color: rgba(228, 225, 225, 0.679);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(240, 239, 239, 0.1);
        }

        h1 {
            text-align: left;
            color: #333;
            font-size: 2rem;
            font-weight: 600;
            margin-top: 10px;
            margin-bottom: 20px;
            background: none;
            box-shadow: none;
            border: none;
            border-bottom: 1px solid #3333332f; /* Adds the underline */
            padding-bottom: 5px; /* Adds space between the text and the underline */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
            font-size: 1rem;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            font-size: 1.1rem;
        }

        td {
            background-color: #fff;
        }

        .action-buttons a {
            text-decoration: none;
            color: #fff;
            padding: 8px 12px;
            border-radius: 5px;
            margin-right: 5px;
            font-size: 0.9rem;
        }

        .edit-btn {
            background-color: #007bff;
        }

        .delete-btn {
            background-color: #ff4444;
        }

        .search-bar {
            display: flex;
            align-items: center;
        }

        .search-bar input {
            margin-right: 5px;
        }

        .search-bar button {
            padding: 8px 15px;
            background-color: #be4242;
            color: #351c1c;
            border: none;
            border-radius: 5px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('authors.create') }}">Create Author</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('books.create') }}">Create Book</a>
                    </li>
                </ul>

                <!-- Search Form -->
                <form class="d-flex search-bar" action="{{ route('books.search') }}" method="GET">
                    <input class="form-control" type="search" name="query" placeholder="Search authors or books" aria-label="Search" required>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Search Results</h1>

        <!-- Table displaying authors and their books -->
        @if($authors->isNotEmpty())
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Books</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($authors as $author)
                    <tr>
                        <td>{{ $author->name }}</td>
                        <td>
                            @if($author->books->isNotEmpty())
                                <ul>
                                    @foreach($author->books as $book)
                                        <li>{{ $book->title }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p>No books found for this author.</p>
                            @endif
                        </td>
                        <td class="action-buttons">
                            <a href="/authors/{{ $author->id }}/edit" class="edit-btn">Edit</a>
                            <a href="/authors/{{ $author->id }}/delete" class="delete-btn">Delete</a>
                            <button class="btn btn-warning bookmark-btn" data-id="{{ $author->id }}">
                                Bookmark
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
        <p style="color: red;">No authors found.</p>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const bookmarkButtons = document.querySelectorAll('.bookmark-btn');

        bookmarkButtons.forEach(button => {
            button.addEventListener('click', function () {
                const authorId = this.getAttribute('data-id');

                // Send AJAX request to bookmark the author
                fetch(`/authors/${authorId}/bookmark`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
                    },
                    body: JSON.stringify({ author_id: authorId })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Author bookmarked successfully!');
                    } else {
                        alert('Failed to bookmark author.');
                    }
                })
                .catch(error => console.error('Error:', error));
            });
        });
    });
</script>

</body>
</html>
