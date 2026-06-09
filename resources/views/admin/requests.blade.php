<!DOCTYPE html>
<html>
<head>
    <title>Admin Requests</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f4f6f9;">

<div class="container mt-5">

    <div class="card shadow border-0 rounded-4">

        <div class="card-header bg-dark text-white">
            <h3 class="mb-0">All Breakdown Requests</h3>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Vehicle</th>
                            <th>Problem</th>
                            <th>Status</th>
                            <th>Update Status</th>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach($requests as $req)

                        <tr>

                            <td>{{ $req->id }}</td>

                            <td>{{ $req->vehicle_type }}</td>

                            <td>{{ $req->problem_description }}</td>

                            <td>
                                @if($req->status == 'pending')
                                    <span class="badge bg-warning text-dark">
                                        Pending
                                    </span>

                                @elseif($req->status == 'accepted')
                                    <span class="badge bg-primary">
                                        Accepted
                                    </span>

                                @else
                                    <span class="badge bg-success">
                                        Done
                                    </span>
                                @endif
                            </td>

                            <td>

                                <form method="POST"
                                      action="/admin/update-status/{{ $req->id }}">

                                    @csrf

                                    <div class="d-flex gap-2">

                                        <select name="status"
                                                class="form-select">

                                            <option value="pending"
                                                {{ $req->status == 'pending' ? 'selected' : '' }}>
                                                Pending
                                            </option>

                                            <option value="accepted"
                                                {{ $req->status == 'accepted' ? 'selected' : '' }}>
                                                Accepted
                                            </option>

                                            <option value="done"
                                                {{ $req->status == 'done' ? 'selected' : '' }}>
                                                Done
                                            </option>

                                        </select>

                                        <button type="submit"
                                                class="btn btn-dark">
                                            Update
                                        </button>

                                    </div>

                                </form>

                            </td>

                        </tr>

                    @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>
</html>