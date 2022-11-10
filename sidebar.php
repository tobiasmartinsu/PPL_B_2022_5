  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">
          <li class="nav-item">
              <a href="/index_mahasiswa.php" class="nav-link collapsed">
                  <i class="bi bi-person"></i>
                  <span>Profile</span>
              </a>
          </li><!-- End Profile Page Nav -->
          <li class="nav-item">
              <a href="/EntryKHS.php" class="nav-link collapsed">
                  <i class="bi bi-layout-text-window-reverse"></i><span>Entry KHS</span>
              </a>
          </li><!-- End Tables Nav -->
          <li class="nav-item">
              <a href="/EntryIRS.php" class="nav-link collapsed">
                  <i class="bi bi-layout-text-window-reverse"></i><span>Entry IRS</span>
              </a>
          </li><!-- End Tables Nav -->
          <li class="nav-item ">
              <a href="/EntryPKL.php" class="nav-link collapsed">
                  <i class="bi bi-layout-text-window-reverse"></i><span>Entry PKL</span>
              </a>
          </li><!-- End Tables Nav -->
          <li class="nav-item ">
              <a href="/EntrySkripsi.php" class="nav-link collapsed">
                  <i class="bi bi-layout-text-window-reverse"></i><span>Entry Skirpsi</span>
              </a>
          </li><!-- End Tables Nav -->
          <li class="nav-item">
              <a href="logout.php" class="nav-link collapsed">
                  <i class="bi bi-box-arrow-in-right"></i>
                  <span>Logout</span>
              </a>
          </li><!-- End Login Page Nav -->
      </ul>
  </aside><!-- End Sidebar-->

  <script>
      const activePage = window.location.pathname;
      const navItems = document.getElementsByClassName('nav-link collapsed');

      console.log(activePage);

      for (let i = 0; i < navItems.length; i++) {
          if (navItems[i].getAttribute('href') === activePage) {
              navItems[i].classList.remove('collapsed');
              console.log(navItems[i]);
          }
      }
  </script>