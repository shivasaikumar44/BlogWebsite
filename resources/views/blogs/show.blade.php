<h1>{{ $blog->title }} ({{ $blog->author }})</h1>

<p>{{ $blog->content }}</p>

<a href="{{ route('blogs.index') }}">Back to list</a>