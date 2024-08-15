<h1>Create new blog</h1>

<form method="POST" action="{{ route('blogs.store') }}">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title"><br><br>
    <label for="content">Content:</label>
    <textarea id="content" name="content"></textarea><br><br>
    <label for="author">Author:</label>
    <input type="text" id="author" name="author"><br><br>
    <input type="submit" value="Create">
</form>
``