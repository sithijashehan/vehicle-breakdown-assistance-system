<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Breakdown System</title>
</head>
<body style="font-family: Arial; background:#f4f4f4;">

<div style="width:400px; margin:50px auto; background:white; padding:20px; border-radius:10px;">

    <h2>Breakdown Request Form</h2>

    @if(session('success'))
        <div style="color:green; margin-bottom:10px;">
            {{ session('success') }}
        </div>
    @endif

    <form action="/request-breakdown" method="POST">
        @csrf

        <input type="text" name="vehicle_type" placeholder="Vehicle Type"
               style="width:100%; padding:10px; margin-bottom:10px;" required>

        <textarea name="problem_description" placeholder="Problem Description"
                  style="width:100%; padding:10px; margin-bottom:10px;" required></textarea>

        <button type="submit"
                style="width:100%; padding:10px; background:blue; color:white; border:none;">
            Send Request
        </button>

    </form>

</div>

</body>
</html>