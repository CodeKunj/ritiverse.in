<?php
$title = "Login";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RiTiVERSE Admin Login</title>
    <link rel="stylesheet" href="/assets/css/admin.css">
    <style>
        body { 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            min-height: 100vh; 
            background: var(--background); 
            background-image: radial-gradient(circle at 50% 30%, rgba(253, 109, 0, 0.08) 0%, transparent 60%);
        }
        .login-card { 
            background: var(--surface); 
            padding: 3rem 2.5rem; 
            border-radius: 20px; 
            border: 1px solid var(--border); 
            width: 100%; 
            max-width: 400px; 
            box-shadow: 0 15px 35px rgba(15, 16, 32, 0.06); 
            text-align: center;
        }
        .login-logo {
            height: 48px;
            width: auto;
            margin-bottom: 1.25rem;
            filter: drop-shadow(0 4px 10px rgba(253, 109, 0, 0.25));
        }
        .login-card h2 { margin-top: 0; margin-bottom: 2rem; font-size: 1.5rem; font-weight: 800; }
        .form-group { margin-bottom: 1.25rem; text-align: left; }
        .form-group label { display: block; margin-bottom: 0.5rem; font-weight: 600; font-size: 0.85rem; color: var(--muted); }
        .form-group input { 
            width: 100%; 
            padding: 0.75rem 1rem; 
            border: 1px solid var(--border); 
            border-radius: 10px; 
            box-sizing: border-box; 
            font-size: 0.95rem;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .form-group input:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(253, 109, 0, 0.15);
        }
        .btn-full { 
            width: 100%; 
            padding: 0.85rem; 
            background: var(--accent-gradient); 
            color: white; 
            border: none; 
            border-radius: 10px; 
            font-weight: 700; 
            font-size: 1rem; 
            cursor: pointer; 
            box-shadow: 0 4px 14px rgba(253, 109, 0, 0.3);
            transition: transform 0.2s, box-shadow 0.2s;
            margin-top: 1rem;
        }
        .btn-full:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(253, 109, 0, 0.4);
        }
    </style>
</head>
<body>
    <div class="login-card">
        <img src="/assets/images/logo.svg" alt="RiTiVERSE Logo" class="login-logo">
        <h2>RiTiVERSE Admin</h2>
        <form method="POST" action="/admin/login">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="admin@ritiverse.com" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="••••••••" required>
            </div>
            <button type="submit" class="btn-full">Sign In</button>
        </form>
    </div>
</body>
</html>
