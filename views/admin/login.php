<?php
$title = "Login";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RITIverse Admin Login</title>
    <link rel="stylesheet" href="/assets/css/admin.css">
    <style>
        body { display: flex; align-items: center; justify-content: center; min-height: 100vh; background: var(--background); }
        .login-card { background: var(--surface); padding: 3rem; border-radius: 20px; border: 1px solid var(--border); width: 100%; max-width: 400px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .login-card h2 { margin-top: 0; margin-bottom: 2rem; text-align: center; }
        .form-group { margin-bottom: 1.5rem; }
        .form-group label { display: block; margin-bottom: 0.5rem; font-weight: 500; font-size: 0.875rem; }
        .form-group input { width: 100%; padding: 0.75rem; border: 1px solid var(--border); border-radius: 8px; box-sizing: border-box; }
        .btn-full { width: 100%; padding: 0.75rem; background: var(--accent); color: white; border: none; border-radius: 8px; font-weight: 600; cursor: pointer; }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>RITIverse Admin</h2>
        <form method="POST" action="/admin/login">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="btn-full">Login</button>
        </form>
    </div>
</body>
</html>
