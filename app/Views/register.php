<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        p {
            color: #27ae60;
            margin-top: 10px;
        }

        .login-link {
            margin-top: 10px;
            text-align: center;
        }

        .login-link a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <form action="/register/processRegister" method="post">
        <h2>Register</h2>

        <?php if (session()->has('success')) : ?>
            <p><?= session('success') ?></p>
        <?php endif; ?>

        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <!-- Tambahkan kolom-kolom lain sesuai kebutuhan -->

        <button type="submit">Register</button>

        <div class="login-link">
            <p>Sudah punya akun? <a href="<?= base_url('login/user'); ?>">Login</a></p>
        </div>
    </form>
</body>

</html>