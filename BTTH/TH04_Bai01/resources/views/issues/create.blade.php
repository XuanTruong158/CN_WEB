<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Thêm sự cố</title>
</head>

<body>

    <h1 style="margin: 50px 50px">Thêm sự cố mới</h1>
    <form action="{{ route('issues.store') }}" method="POST" style="margin: 50px 50px">
        @csrf
        <div class="mb-3">
            <label for="computer_id" class="form-label">Mã máy tính</label>
            <select class="form-control" id="computer_id" name="computer_id" required>
                @foreach($computers as $computer)
                <option value="{{ $computer->id }}">
                    (ID: {{ $computer->id }})
                </option>
                @endforeach
            </select>


        </div>

        <div class="mb-3">
            <label for="reported_by" class="form-label">Người báo cáo sự cố</label>
            <input type="text" class="form-control" id="reported_by" name="reported_by" required>
        </div>

        <div class="mb-3">
            <label for="reported_date" class="form-label">Thời gian báo cáo sự cố</label>
            <input type="datetime-local" class="form-control" id="reported_date" name="reported_date" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="urgency" class="form-label">Mức độ sự cố</label>
            <select class="form-control" id="urgency" name="urgency" required>
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Trạng thái</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Open">Open</option>
                <option value="In Progress">In Progress</option>
                <option value="Resolved">Resolved</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Thêm</button>
        <a href="{{ route('issues.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>

</body>

</html>