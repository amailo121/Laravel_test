<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <!-- Bootstrap CSSの読み込み -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="mb-4">Posts List</h1>

        <div class="card">
            <div class="card-header">
                <h2>Posts</h2>
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($posts as $post)
                    <li class="list-group-item">
                        <h5 class="mb-1">{{ $post->title }}</h5>
                        <p class="mb-1">{{ $post->content }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- BootstrapのJavaScriptと依存するPopper.jsの読み込み -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
