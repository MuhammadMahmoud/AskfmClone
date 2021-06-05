@extends('layouts.accountLayout')
@section('title')
    Questions
@endsection
@section('style')
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset("Styles/css/all.min.css") }}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset("Style/css/adminlte.min.css") }}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection
@section('content')
<div class="wrapper">




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Questions</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Your Questions</h3>

            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>

                        <th style="width: 90%">
                        </th>

                        <th style="width: 10%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a>
                                AdminLTE v3
                            </a>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                Answer
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a>
                                AdminLTE v3
                            </a>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                Answer
                            </a>
                        </td>
                    </tr>                    <tr>
                        <td>
                            <a>
                                AdminLTE v3
                            </a>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                Answer
                            </a>
                        </td>
                    </tr>                    <tr>
                        <td>
                            <a>
                                AdminLTE v3
                            </a>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                Answer
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a>
                                AdminLTE v3
                            </a>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                Answer
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a>
                                AdminLTE v3
                            </a>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                Answer
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a>
                                AdminLTE v3
                            </a>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                Answer
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a>
                                AdminLTE v3
                            </a>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                Answer
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
@endsection
@section('scripts')
    <!-- jQuery -->
    <script src="{{ asset("Styles/js/jquery.min.js") }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset("Styles/js/bootstrap.bundle.min.js") }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset("Styles/js/adminlte.min.js") }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset("Styles/js/demo.js") }}"></script>

@endsection
