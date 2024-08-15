<h1>Edit blog</h1>

<form method="POST" action="{{ route('blogs.update', $blog->id) }}">
    @csrf
    @method('PUT')
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="{{ $blog->title }}"><br><br>
    <label for="content">Content:</label>
    <textarea id="content" name="content">{{ $blog->content }}</textarea><br><br>
    <label for="author">Author:</label>
    <input type="text" id="author" name="author" value="{{ $blog->author }}"><br><br>
    <input type="submit" value="Update">
</form>