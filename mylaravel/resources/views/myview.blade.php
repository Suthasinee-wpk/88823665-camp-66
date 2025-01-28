{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางแม่สูตรคูณ</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">ตารางแม่สูตรคูณ</h1>
        <form method="POST" action="{{ url('/mycontroller') }}">
            @csrf
            <div class="mb-3">
                <label for="multiplicationTable" class="form-label">กรอกเลขแม่สูตรคูณ (1-12):</label>
                <div class="d-flex">
                    <input type="number" class="form-control me-4" id="multiplicationTable" name="multiplicationTable" min="1" max="12" required>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        @if (isset($table))  <!-- isset คือ คีย์ ของอาร์เรย์มีการกำหนดค่าถูกหรือไม่ -->
            <h3 class="mt-5 text-center">ตารางสูตรคูณของแม่ {{$table}}</h3>
            <table class="table table-bordered text-center mt-3">
                <thead>
                    <tr><th>ตัวเลข</th><th>ผลลัพธ์</th></tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 12; $i++)
                        <tr>
                            <td>{{$table}} x {{$i}}</td>
                            <td>{{$table * $i}}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        @endif
    </div>
</body>
</html> --}}

<form method="post"
    action="={{url('/mycontroller')}}">
    @csrf
    <input type="text" name="myinput">
    <button type="submit">Submit</button>
</form>
