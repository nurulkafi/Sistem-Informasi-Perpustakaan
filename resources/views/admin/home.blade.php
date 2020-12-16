@extends('admin.templates.default')

@section('content')
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>
              <?php 

				$koneksi = mysqli_connect("localhost","root","","perpus");

				// Cara 1
				$sql = "SELECT count(*) AS jumlah FROM authors";
				$query = mysqli_query($koneksi,$sql);
				$result = mysqli_fetch_array($query);

				echo "              <div class='info-box-content'>
				                <span class='info-box-text'>Jumlah Penulis</span>
				                <span class='info-box-number'>
				                  {$result['jumlah']}
				                </span>
				              </div>";
			?>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-book"></i></span>
			<?php 

				$koneksi = mysqli_connect("localhost","root","","perpus");

				// Cara 1
				$sql = "SELECT count(*) AS jumlah FROM books";
				$query = mysqli_query($koneksi,$sql);
				$result = mysqli_fetch_array($query);

				echo "              <div class='info-box-content'>
				                <span class='info-box-text'>Jumlah Buku</span>
				                <span class='info-box-number'>
				                  {$result['jumlah']}
				                </span>
				              </div>";
			?>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Buku DiPinjam</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <?php 

				$koneksi = mysqli_connect("localhost","root","","perpus");

				// Cara 1
				$sql = "SELECT count(*) AS jumlah FROM users";
				$query = mysqli_query($koneksi,$sql);
				$result = mysqli_fetch_array($query);

				echo "              <div class='info-box-content'>
				                <span class='info-box-text'>Jumlah Penulis</span>
				                <span class='info-box-number'>
				                  {$result['jumlah']}
				                </span>
				              </div>";
			?>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- /.row -->
      </div>
@endsection