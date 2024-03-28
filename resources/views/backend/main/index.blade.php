<<!DOCTYPE html>
<html lang="en">

<head>

    @include('backend.component.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       @include('backend.component.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('backend.component.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
               @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
           @include('backend.component.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
   @include('backend.component.scroll-to-top')

    <!-- Logout Modal-->
    @include('backend.component.modal-logout')

    <!-- Bootstrap core JavaScript-->
   @include('backend.component.script')

</body>

</html>
