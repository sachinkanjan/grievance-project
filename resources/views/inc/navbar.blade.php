<nav class="navbar navbar-expand-md ">
        {{--<a class="navbar-brand" href="#">Griveance System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>--}}
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">{{config('app.name'), 'G.S'}} <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/new">New</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/history">History</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/profile">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/new_grievance">New Grievance</a>
                  </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            {{-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> --}}
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
          </form>
        </div>
      </nav>