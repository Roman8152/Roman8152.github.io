<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="corePage.php">Name</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="corePage.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="myProf" class="nav-link" href="profile.php">My Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" id="searchForm" action="profile.php" method="POST">
                <input name="findUser" id="search" class="form-control mr-sm-2" type="text"
                placeholder="Search for user" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../reg_log/logout.php">Sign Out</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item" id="friendsCol">
                    <a id="friends" class="btn nav-link active" href="#">Friends</a>
                </li>
                <!-- Dočasně -->
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link quickFriend" href="#">Friend</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        $("#search").autocomplete({
            source: "selector.php",
            minLength: 1,
            select: function(event, ui) {
                $("#search").val(ui.item.value);
                $("#searchForm").submit();
            }
        });
    });
</script>