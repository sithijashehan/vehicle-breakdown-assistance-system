<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Breakdown System</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f4f6f9;">

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg border-0 rounded-4">

                <div class="card-header bg-primary text-white text-center">
                    <h3>Vehicle Breakdown Request</h3>
                </div>

                <div class="card-body p-4">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="/request-breakdown" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Vehicle Type</label>

                            <input type="text"
                                   name="vehicle_type"
                                   class="form-control"
                                   placeholder="Enter vehicle type"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Problem Description</label>

                            <textarea name="problem_description"
                                      class="form-control"
                                      rows="4"
                                      placeholder="Describe the problem"
                                      required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Send Request
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </div>

</div>

</body>
</html>