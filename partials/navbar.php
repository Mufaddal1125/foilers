
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="./index.php">Foilers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./status.php">Check Status</a>
                </li>

                
            </ul>
            <form type='get' action="./server.php" name='logout' class="form-inline my-2 my-lg-0">

                <input type="submit" name="logout" id="logout" value="Logout" class="btn btn-primary">

            </form>
        </div>
        </div>
    </nav>