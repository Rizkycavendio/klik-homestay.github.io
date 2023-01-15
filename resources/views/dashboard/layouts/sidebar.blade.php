<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
          <span class="bi bi-menu-button-wide-fill"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
          <span data-feather="home" class="align-text-bottom"></span>
          List Homestay
        </a>
      </li>
      <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/Orders') ? 'active' : '' }}" href="/dashboard/order">
            <span data-feather="log-in" class="align-text-bottom"></span>
            Reservasi
          </a>
        </li>
    </ul>
  </div>
</nav>