<x-app-layout>
    <div class="wrapper " id="refreshdb">

        <!-- Content Wrapper. Contains page content -->
        @include('refresh')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

    @section('js')
        <script>
            setInterval(function(){
            $.ajax({
                type: "GET",
                url: "refresh",
                cache: false,
                success: function (html) {
                    $("#refreshdb").html(html).show('slow');
                } //end function
            });//close ajax
            }, 1000) /* time in milliseconds (ie 2 seconds)*/

        </script>
    @endsection
</x-app-layout>
