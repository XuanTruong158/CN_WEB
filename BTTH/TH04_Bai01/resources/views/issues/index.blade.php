<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bài tập thực hành số 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
    .table-title {
        background-image: linear-gradient(to right, #add8e6, #d1a7ff);

    }
    </style>
</head>

<body class="p-3">
    <div class="container-xl">
        <div class="table-wrapper">
            <div class="table-title d-flex justify-content-between align-items-center p-3">
                <h2>Quản lí <b>Sự cố</b></h2>
                <a href="{{ route('issues.create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i>
                    <span>Thêm sự cố</span></a>
            </div>

            @if(session('success'))
            <div class="alert alert-success my-3">
                {{ session('success') }}
            </div>
            
            @endif

            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Mã sự cố</th>
                        <th>Mã máy tính</th>
                        <th>Người báo cáo sự cố</th>
                        <th>Thời gian báo cáo</th>
                        <th>Mô tả</th>
                        <th>Mức độ sự cố</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($issues as $issue)
                    <tr>
                        <td>{{ $issue->id }}</td>
                        <td>{{ $issue->computer_id }}</td>
                        <td>{{ $issue->reported_by }}</td>
                        <td>{{ $issue->reported_date }}</td>
                        <td>{{ $issue->description }}</td>
                        <td>{{ $issue->urgency }}</td>
                        <td>{{ $issue->status }}</td>
                        <td>
                            <a href="{{ route('issues.edit', $issue->id) }}" class="btn btn-primary btn-sm mb-2"><i
                                    class="fas fa-edit"></i> Sửa</a>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $issue->id }}"><i class="fas fa-trash-alt"></i>
                                Xoá</button>
                        </td>
                    </tr>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="deleteModal{{ $issue->id }}" tabindex="-1"
                        aria-labelledby="deleteModalLabel{{ $issue->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Xác nhận xoá</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Bạn có chắc là bạn muốn xóa vấn đề này không?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <form action="{{ route('issues.destroy', $issue->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xoá</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</body>

</html>