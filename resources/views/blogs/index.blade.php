<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 33.33%;
        margin: 20px;
        float: left;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4);
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 18px;
        color: #666;
    }

    .actions {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .btn {
        background-color: #337ab7;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #23527c;
    }

    .btn-delete {
        background-color: #dc3545;
        color: #fff;
    }

    .btn-delete:hover {
        background-color: #c82333;
    }

    .clearfix {
        clear: both;
    }
</style>

<h1>Blogs</h1>

<div class="clearfix">
    @foreach($blogs as $blog)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $blog->title }} ({{ $blog->author }})</h5>
                <p class="card-text">{{ $blog->content }}</p>
                <div class="actions">
                    <a href="{{ route('blogs.show', $blog->id) }}" class="btn">Show</a>
                    <a href="{{ url('blogs/' . $blog->id . '/edit') }}" class="btn">Edit Blog</a>
                    <form action="{{ url('blogs/' . $blog->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete">Delete Blog</button>
                    </form>
                </div>
            </div>
        </div>
        @if(($loop->index + 1) % 3 == 0)
            <div class="clearfix"></div>
        @endif
    @endforeach
</div>

<a href="{{ route('blogs.create') }}" class="btn">Create new blog</a>