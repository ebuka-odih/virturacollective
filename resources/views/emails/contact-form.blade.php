<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- Minimal inline Bootstrap-ish helpers -->
    <style>
        /* card */
        .card      { border:1px solid #dee2e6;border-radius:.25rem;padding:1.5rem; }
        .card-hdr  { font-size:1.25rem;font-weight:700;margin:0 0 .75rem; }
        /* type */
        body       { margin:0;padding:2rem;
                     font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif; }
        a          { color:#0d6efd;text-decoration:none; }
        small      { color:#6c757d;font-size:.875rem; }
    </style>
</head>
<body>
    <div style="max-width:600px;margin:0 auto;">
        <div class="card">
            <div class="card-hdr">📬 New Contact-Us Submission</div>

            <p><strong>First Name:</strong> {{ $data->f_name ?? '-' }}</p>
            <p><strong>Last Name:</strong> {{ $data->l_name ?? '-' }}</p>
            <p><strong>Email:</strong> <a href="mailto:{{ $data->email }}">{{ $data->email }}</a></p>
        </div>

    </div>
</body>
</html>
