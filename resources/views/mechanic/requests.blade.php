<!DOCTYPE html>
<html>
<head>
    <title>Mechanic Requests</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f4f6f9;">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-dark text-white">
            <h3>Mechanic Request Panel</h3>
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>
                    <th>ID</th>
                    <th>Vehicle</th>
                    <th>Problem</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                @foreach($requests as $req)

                <tr>
                    <td>{{ $req->id }}</td>
                    <td>{{ $req->vehicle_type }}</td>
                    <td>{{ $req->problem_description }}</td>
                    <td>{{ $req->status }}</td>

                    <td>

                        <form method="POST"
                              action="/admin/update-status/{{ $req->id }}">

                            @csrf

                            <select name="status" class="form-select mb-2">

                                <option value="pending">Pending</option>
                                <option value="accepted">Accepted</option>
                                <option value="done">Done</option>

                            </select>

                            <button type="submit"
                                    class="btn btn-primary">
                                Confirm
                            </button>

                        </form>

                    </td>
                </tr>

                @endforeach

            </table>

        </div>

    </div>

</div>

</body>
</html>