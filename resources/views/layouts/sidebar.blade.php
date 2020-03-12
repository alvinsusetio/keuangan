 <body>
 <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
           <img src="/assets/img/brand/roketin.png" class="navbar-brand-img" alt="">
          
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('home') }}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
                <li class="nav-item">
              <a class="nav-link" href="{{ url('category')}}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Kategori Pengeluaran</span>
              </a>
            </li>
       <li class="nav-item">
              <a class="nav-link" href="{{ url('laporan-keuangan') }}">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Laporan Keuangan</span>
              </a>
            </li>
        
                                    
            </div>
          </div>

        </div>
      </div>
    </div>
  </nav>