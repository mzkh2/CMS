<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login  Form</title>
        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/styles.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="register-body">
        <div class="register-container">
            <header class="register-header">
                <h1>Login</h1>
                <p>Please fill in the form below to log in to your account.</p>
                <p>or click <a href="/register">here</a> to register</p>
            </header>    

            <form class="register-form" action="/login" method="POST">
                @csrf
                <h1>Login</h1>
                <div class="register-input-area">
                    <label for="email">Email:</label>
                    <input class="register-input" placeholder="example@example.com" type="email" id="email" name="email" required>
                </div>
                <div class="register-input-area">
                    <label for="password">Password:</label>
                    <input class="register-input" placeholder="••••••••" type="password" id="password" name="password" required>
                </div>
                
                <button class="register-btn"type="submit">Login</button>
            </form>
        </div>
    </body>
</html>
