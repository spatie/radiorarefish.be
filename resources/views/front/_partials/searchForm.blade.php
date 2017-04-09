<form method="GET" action="{{ action('Front\SearchController@index') }} "class="navbar-form">
    <div class="form-group">
        <input type="text" name="query" class="form-control" placeholder="Search playlists">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
</form>