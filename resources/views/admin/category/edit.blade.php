
    

@include('layouts.css')  
    
@include('layouts.sidebar')
     
    @include('layouts.top_bar')
   
    @if(count($errors)>0) 
    @foreach($errors->all() as $error)
    <div class="alert alert-danger " role="alert">
   {{ $error }}
    </div>
    @endforeach

    @endif

    @if(Session::has('Succes'))
        <div class="alert alert-success " role="alert">
    {{ Session('Succes') }}
        </div>
    @endif


<form action="{{ route('category.update', $category->id )}}" method="POST">
@csrf
@method('patch')
<div class="form-group">
          <label>Kategori</label>
          <input type="text" class="form-control" name="name" value="{{ $category->name }}">
               <div class="form-group">
          <label>Nominal</label>
          <input type="text" class="form-control" name="nominal"value="{{ $category->nominal }}">
            <div class="form-group">
      </div>
            <div class="form-group">
           <label>Tanggal</label>
          <label for="exampleInputPassword1" style="color: white;">Tanggal
        </label>
        <input name="tanggal" type="date" class="form-control datepicker"
        id="exampleInputPassword1" placeholder="Tanggal" autocomplate="off">
    </div>
      </div>
      <div class="form-group">
      <button class="btn btn-primary btn-block">Update Kategori</button>
      </div>

</form>

</html>

  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
 
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>

