    @include('layouts.css')
    @include('layouts.sidebar')
    @include('layouts.top_bar')


        <form action="{{ url('cari-laporan')}}" method="get">  
    <div class="form-group">
           <label>Dari</label>
          <label for="" style="color: white;">dari
        </label>
        <input name="dari" type="date" class="form-control datepicker"
        id="" placeholder="Tanggal" autocomplate="off">
    </div>
    <div class="form-group">
           <label>Sampai</label>
          <label for="" style="color: white;">sampai
        </label>
        <input name="sampai" type="date" class="form-control datepicker"
        id="" placeholder="Tanggal" autocomplate="off">
    </div>
    <div>
      <button class="btn btn-primary btn-block">Cari Kategori</button>
</div>





















      <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
 
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>