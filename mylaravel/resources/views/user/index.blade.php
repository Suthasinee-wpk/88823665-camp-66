@extends('layouts.default_with_menu')

@section('content')

<h1>{{ session('user')->name }} </h1>

<style>
 table tbody tr:hover td {
    color: rgb(151, 12, 250);
    background-color: rgba(168, 168, 255, 0.349);
}

</style>
<div class="row">
    <div class="col-md-12">
      <div class="card mb-12">
        <div class="card-header"><h3 class="card-title"></h3></div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>Email</th>
                <th style="width: 240px"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $index => $user) { ?>
             <tr class="align-middle">
                <td>{{ $index+1 }}.</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{url('/user/'.$user->id)}}">
                    <button class="btn btn-warning">Edit</button>
                    </a>
                    <form action="{{url('/user')}}" method="post" style="display: inline;" onsubmit="return confirm_delete(this);">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-end">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
      <button class="btn" onclick="confirm_delete_click()">Click Me</button>
      <!-- /.card -->
    </div>
</div>
@endsection

@section('scripts')
    <script>
        // ปุ่ม Click Me เอาไว้เช็ค
        confirm_delete_click = function (){
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then(function(result) {
                    console.log("Result",result)
                    if (result.isConfirmed) {
                        console.log("Delete It!",result)
                    }
                });
            }

            // ปุ่ม Delete เอาไว้ลบข้อมูล
            function confirm_delete(form) {
                event.preventDefault();
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: "btn btn-success",
                        cancelButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                });
                swalWithBootstrapButtons.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                    reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    }).then(() => {
                        form.submit();
                    });
                } else if ( result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire({
                    title: "Cancelled",
                    text: "Your imaginary file is safe :)",
                    icon: "error"
                    });
                 }
            });
        }
    </script>
@endsection
