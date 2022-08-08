<form action="{{ $action }}" method="POST">
    @csrf
    @if($method)
        @method('PATCH')
    @endif
    <input type="text" name="name" value="{{ isset($movie) ? $movie->name : null }}">
    <input type="text" name="description" value="{{ isset($movie) ? $movie->description : null }}">

    <button type="submit">Submit</button>
</form>
