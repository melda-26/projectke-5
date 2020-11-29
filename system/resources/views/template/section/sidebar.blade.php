@php
  function checkRouteActive($route){
  if(Route:: current() == $route) return 'active';
}
@endphp

<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url('public')}}/dist/img/logo-5.png" alt="logo-5" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Beauty House</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('public')}}/dist/img/foto.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Beauty House</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              
              <p>
                Beranda</p>
              
            <ul class="nav-item">
              <li class="nav-item">
                 <a class="nav-link" href="{{url('produk')}}">
                                              
                           <p>PRODUK</p>
                        </a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="{{url('user')}}">
                       
                            <p>User</p>
                        </a>
             </li>
              <li class="nav-item">
                 <a class="nav-link" href="{{url('register')}}">
                        <i class="fas fa-align-justify"></i> 
                            <p>Register</p>
                        </a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="{{url('Promo')}}">
                       
                            <p>Promo</p>
               </a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="{{url('login')}}">
                       
                            <p>Login</p>
                        </a>
                      </li>
             

             
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>