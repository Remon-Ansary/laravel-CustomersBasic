<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">



        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Practice</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="home">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="datascan">Data</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
    <div>
        @yield('content');

    </div>
    <!-- /.container -->
</nav>
