<header>
    <div class="logo-img">
      <div class="py-4">
        <a href="index.php">
          <img width="150" src="assets/images/main-logo.svg" alt="" />
        </a>
      </div>
      <div class="lines" onclick="toggleNav()">
        <span style="background-color: #759DFE;"></span>    
        <span style="background-color: #FDBCCB;"></span>
        <span style="background-color: #FDDF37;"></span>
      </div>
    </div>
    <div class="header-links">
      <div class="link-items">
        <ul>
          <li class="toggle-li d-lg-none">
            <div class="logo-img">
              <img class="img-fluid" src="assets/images/main-logo-white.svg" alt="" />
            </div>
            <div class="lines px-2" onclick="toggleNav()">
              <span class="close"> &times;</span>

            </div>
          </li>
          <!-- <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Language </a> <div class="dropdown-menu" aria-labelledby="navbarDropdown"> <a class="dropdown-item" href="#"></a> </div> </li> -->
          <li>
            <a href="qr-gen.php">QR Code Generator</a>
          </li>
          <li>
            <a href="price.php">Prices</a>
          </li>
          <li>
            <a href="faq.php">FAQ</a>
          </li>
          <li>
            <a href="contact.php">Contact us</a>
          </li>
          <li>
            <a class="nav-link login-top" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
              href="#">Login</a>
          </li>
          <li class="nav-item d-lg-none">
            <a class="nav-link login-top" data-toggle="modal" data-target="#creataccount" data-whatever="@mdo"
              href="#">Register</a>
          </li>
        </ul>
        <button class="btn btn-dark Register_btn d-none d-lg-block" data-toggle="modal" data-target="#creataccount"
          data-whatever="@mdo">
          Register
        </button>
      </div>
      <div class="closing-btn" onclick="toggleNav()"></div>
    </div>
  </header>