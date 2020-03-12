<!DOCTYPE html>
<html>
    @include('layouts.css')
    @include('layouts.sidebar')
    @include('layouts.top_bar')
    @if(Session::has('Succes'))
        <div class="alert alert-success " role="alert">
    {{ Session('Succes') }}
        </div>
    @endif


   <a href="{{ route('category.create') }}" class="btn btn-info btn-sm">Tambah Pengeluaran</a>
    <br>
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori Pengeluaran</th>
                <th>Nominal</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
        </thead>    
            <tbody>
             @foreach ($category as $result => $hasil)
                <tr>
                    <td>{{ $result + $category->firstitem() }}</td>
                    <td>{{ $hasil->name}}</td>
                    <td>{{ $hasil->nominal }}</td>
                    <td>{{ $hasil->tanggal }}</td>
                    <td>

                    <form action="{{ route('category.destroy', $hasil->id )}}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{ route('category.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    </td>
                </tr>
                 @endforeach              
            </tbody>
           
        </table>
        {{ $category->links() }}

</html>

  <!-- Argon Scripts -->
    <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
 
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>

  