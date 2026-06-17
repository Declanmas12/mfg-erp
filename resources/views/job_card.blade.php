<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MES Operator Panel</title>
    <style>
        body { font-family: sans-serif; background: #f3f4f6; padding: 40px; }
        .card { background: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); max-width: 400px; margin: 0 auto; }
        .status { display: inline-block; padding: 4px 8px; background: #3b82f6; color: white; border-radius: 4px; font-weight: bold; }
        button { width: 100%; padding: 12px; margin-top: 16px; background: #10b981; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer; }
    </style>
</head>
<body>

    <div class="card">
        <h2>Active Work Order</h2>
        <p><strong>Job ID:</strong> {{ $job_id }}</p>
        <p><strong>Part:</strong> {{ $part_name }}</p>
        <p><strong>Qty Required:</strong> {{ $quantity }}</p>
        <p><strong>Status:</strong> <span class="status">{{ $status }}</span></p>
        
        <button onclick="alert('Job marked as Complete! (This is where our API hook will go later)')">
            Complete Operation
        </button>
    </div>

</body>
</html>