<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Employee</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Laravel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('employee.index') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Employee</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon far fa-right-from-bracket text-danger"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employee</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                  <h3 class="card-title">Data Table Karyawan</h3>
                  <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal-create">Create</button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIP</th>
                      <th>Name</th>
                      <th>Birth Date</th>
                      <th>Salary</th>
                      <th>Phone Number</th>
                      <th>Address</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <!-- Modal create -->
              <div class="modal fade" id="modal-create">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Create Employee</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{ route('employee.store') }}" method="POST">
                      @csrf
                      <div class="modal-body">
                          <div class="card-body">
                            <div class="form-group">
                              <label for="nip">NIP</label>
                              <input type="text" class="form-control" id="nip" name="nip" placeholder="Enter NIP">
                            </div>
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                              <label for="birth_date">Birth Date</label>
                              <input type="date" class="form-control" id="birth_date" name="birth_date" placeholder="Enter birth date">
                            </div>
                            <div class="form-group">
                              <label for="salary">Salary</label>
                              <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter salary">
                            </div>
                            <div class="form-group">
                              <label for="phone_number">Phone Number</label>
                              <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter phone number">
                            </div>
                            <div class="form-group">
                              <label for="address">Address</label>
                              <textarea name="address" id="address" class="form-control" cols="30" rows="10" placeholder="Enter address"></textarea>
                            </div>
                          </div>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>

              <!-- Modal edit -->
              <div class="modal fade" id="modal-edit">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Edit Employee</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{ route('employee.index') }}" method="POST">
                      @csrf
                      <div class="modal-body">
                          <div class="card-body">
                            <div class="form-group">
                              <label for="edit-nip">NIP</label>
                              <input type="text" class="form-control" id="edit-nip" name="nip" placeholder="Enter NIP">
                            </div>
                            <div class="form-group">
                              <label for="edit-name">Name</label>
                              <input type="text" class="form-control" id="edit-name" name="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                              <label for="edit-birth_date">Birth Date</label>
                              <input type="date" class="form-control" id="edit-birth_date" name="birth_date" placeholder="Enter birth date">
                            </div>
                            <div class="form-group">
                              <label for="edit-salary">Salary</label>
                              <input type="text" class="form-control" id="edit-salary" name="salary" placeholder="Enter salary">
                            </div>
                            <div class="form-group">
                              <label for="edit-phone_number">Phone Number</label>
                              <input type="text" class="form-control" id="edit-phone_number" name="phone_number" placeholder="Enter phone number">
                            </div>
                            <div class="form-group">
                              <label for="edit-address">Address</label>
                              <textarea name="address" id="edit-address" class="form-control" cols="30" rows="10" placeholder="Enter address"></textarea>
                            </div>
                          </div> 
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>

              <!-- Modal delete -->
              <div class="modal fade" id="modal-delete">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Delete Employee</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{ route('employee.index') }}" method="POST">
                      @csrf
                      <div class="modal-body">
                          <div class="card-body">
                            <div class="form-group">
                              <label for="delete-nip">NIP</label>
                              <input type="text" class="form-control" id="delete-nip" name="nip" placeholder="Enter nip" disabled>
                            </div>
                            <div class="form-group">
                              <label for="delete-name">Name</label>
                              <input type="text" class="form-control" id="delete-name" name="name" placeholder="Enter nama" disabled>
                            </div>
                            <div class="form-group">
                              <label for="delete-birth_date">Birth Date</label>
                              <input type="date" class="form-control" id="delete-birth_date" name="birth_date" placeholder="Enter tanggal lahir" disabled>
                            </div>
                            <div class="form-group">
                              <label for="delete-salary">Salary</label>
                              <input type="text" class="form-control" id="delete-salary" name="salary" placeholder="Enter gaji" disabled>
                            </div>
                            <div class="form-group">
                              <label for="delete-phone_number">Phone Number</label>
                              <input type="text" class="form-control" id="delete-phone_number" name="phone_number" placeholder="Enter telepon" disabled>
                            </div>
                            <div class="form-group">
                              <label for="delete-address">Address</label>
                              <textarea name="address" id="delete-address" class="form-control" cols="30" rows="10" placeholder="Enter alamat" disabled></textarea>
                            </div>
                          </div>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div> 
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    var table_example = $('#example').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      ajax: {
            url: "{{ route('employee.datatable') }}",
      },
      columns: [
            {
                data: 'id',
                name: 'id',
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
                // orderable: false
            },
            {
                data: 'nip',
                name: 'nip',
                // orderable: false
            },
            {
                data: 'name',
                name: 'name',
                // orderable: false
            },
            {
                data: 'birth_date',
                name: 'birth_date',
                // orderable: false
            },
            {
                data: 'salary',
                name: 'salary',
                // orderable: false
            },
            {
                data: 'phone_number',
                name: 'phone_number',
                // orderable: false
            },
            {
                data: 'address',
                name: 'address',
                // orderable: false
            },
            {
                data: 'action',
                name: 'action',
                orderable: false
            }
        ],
    });


    $(document).on('click', '.btn-edit-employee', function(){
        $("#modal-edit").modal('show')
        let tr = $(this).closest('tr');
        if(tr.hasClass('child')){
            tr = tr.prev()
        }
        let data = table_example.row(tr).data()
        let url = "{{ route('employee.index') }}"
        $('#modal-edit form').attr('action', url + "/" + data.id + "/edit")
        $('#edit-nip').val(data.nip)
        $('#edit-name').val(data.name)
        $('#edit-birth_date').val(data.birth_date)
        $('#edit-salary').val(data.salary)
        $('#edit-phone_number').val(data.phone_number)
        $('#edit-address').val(data.address)
    })


    $(document).on('click', '.btn-delete-employee', function(){
        //$("#modal-delete").modal('show')
        let tr = $(this).closest('tr');
        if(tr.hasClass('child')){
            tr = tr.prev()
        }
        let data = table_example.row(tr).data()
        let url = "{{ route('employee.index') }}"
        $('#modal-delete form').attr('action', url + "/" + data.id + "/delete")

        let fix = confirm ("Are you sure want to delete this employee?")
        if(fix){
          $.ajax({
            url:"employee/"+data.id+"/delete",
            beforeSend:function(){
              //  $('#ok_button').text('Deleting...');
            },
            success:function(data)
            {
                setTimeout(function(){
                //$('#confirmModal').modal('hide');
                $('#example').DataTable().ajax.reload();
                alert('Employee Deleted'); 
                }, 2000);
            }
          })
        }

        /*$('#delete-nip').val(data.nip)
        $('#delete-name').val(data.name)
        $('#delete-birth_date').val(data.birth_date)
        $('#delete-salary').val(data.salary)
        $('#delete-phone_number').val(data.phone_number)
        $('#delete-address').val(data.address)*/
    })
  });
</script>
</body>
</html>
