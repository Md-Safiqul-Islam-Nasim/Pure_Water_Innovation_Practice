<div class="main-panel">

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
  <div class="main-header">

    <!-- navbar start -->
    <nav
      class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
      <div class="container-fluid">
        <nav
          class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
          <div class="input-group">
            <div class="input-group-prepend">
              <button type="submit" class="btn btn-search pe-1">
                <i class="fa fa-search search-icon"></i>
              </button>
            </div>
            <input
              type="text"
              placeholder="Search ..."
              class="form-control" />
          </div>
        </nav>

        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">

          <li class="nav-item topbar-user dropdown hidden-caret">
            <a
              class="dropdown-toggle profile-pic"
              data-bs-toggle="dropdown"
              href="#"
              aria-expanded="false">
              <div class="avatar-sm">
                <img
                  src="backend/assets/img/profile.jpg"
                  alt="..."
                  class="avatar-img rounded-circle" />
              </div>
              <span class="profile-username">
                <span class="op-7">Hi,</span>
                <span class="fw-bold">{{ Auth::user()->name }}</span>
              </span>
            </a>
            <ul class="dropdown-menu dropdown-user animated fadeIn">
              <div class="dropdown-user-scroll scrollbar-outer">
                <li>
                  <div class="user-box">
                    <div class="u-text">
                      <h4>Hizrian</h4>
                      <p class="text-muted">{{ Auth::user()->email }}</p>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Home</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>


                </li>
              </div>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <!-- navbar end -->
  </div>