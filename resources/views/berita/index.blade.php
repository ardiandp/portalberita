<!-- header -->
@include ('layout.header')

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
    @include ('layout/sidebar')
        <!-- / Menu -->
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          @include ('layout/nav')
          <!-- / Navbar -->
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->           
            
<div class="container mt-3">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>            
 <h2>Daftar Berita</h2>
    <table class="table table-bordered" id="berita-table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Isi</th>
                <th>Penulis</th>
                <th>Tanggal</th>
            </tr>
        </thead>
    </table>

    @push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(function() {
            $('#berita-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('berita.data') !!}',
                columns: [
                    { data: 'judul', name: 'judul' },
                    { data: 'isi', name: 'isi' },
                    { data: 'penulis', name: 'penulis' },
                    { data: 'tanggal', name: 'tanggal' },
                ]
            });
        });
    </script>
@endpush
</div>

            
              
              <!--/ Card layout -->
            </div>
            <!-- / Content -->

          
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@extends ('layout/footer')