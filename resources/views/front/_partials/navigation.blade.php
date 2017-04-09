<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Radio Rarefish</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Playlists <span class="sr-only">(current)</span></a></li>
                <li><a href="#">How to listen</a></li>
                <li><a href="#">About</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form method="GET" action="{{ action('Front\SearchController@index') }} "class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" name="query" class="form-control" placeholder="Search playlists">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>

                </li>
            </ul>
        </div>
    </div>
</nav>