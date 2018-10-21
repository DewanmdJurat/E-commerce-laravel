 <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <div class="nav-link">
                <div class="profile-name">
                  <p class="name">
                   <a class="name" href="{{url('/dashboard/Admin')}}">{{Auth::user()->name}} </a>
                  </p>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/dashboard/Admin')}}">
                <i class="icon-rocket menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="icon-check menu-icon"></i>
                <span class="menu-title">Order Details</span>
              </a>
              <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('manage/order')}}">Manage Order</a></li>
                  
                </ul>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link" data-toggle="collapse" href="#category-layouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="icon-options-vertical menu-icon"></i>
                <span class="menu-title">Category</span>
              </a>
              <div class="collapse" id="category-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{url('create/category')}}">Create Category</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('manage/category')}}">Manage Category</a></li>
                </ul>
              </div>
            </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#menufecturer-layouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="icon-options-vertical menu-icon"></i>
                <span class="menu-title">Manufacturer</span>
              </a>
              <div class="collapse" id="menufecturer-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{url('manufacturer/create')}}">Create Manufacturer</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('manufacturer/manage')}}">Manage Manufacturer</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#product-layouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="icon-options-vertical menu-icon"></i>
                <span class="menu-title">Product</span>
              </a>
              <div class="collapse" id="product-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{url('product/create')}}">Create Product </a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('product/manage')}}">Manage Product</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>