<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration Form</title>
        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/register.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="register-body">
        <div class="register-container">
            <header class="register-header">
                <h1>Register</h1>
                <p>Please fill in the form below to create an account.</p>
                <p>or click <a href="/login">here</a> to login</p>
            </header>    

            <form class="register-form" action="/register" method="POST">
                @csrf
                <h1>Create an Account</h1>
                <div class="register-input-area">
                    <label for="name">Name:</label>
                    <input class="register-input" placeholder="Issac Kel" type="text" id="name" name="name" required>
                </div>
                <div class="register-input-area">
                    <label for="email">Email:</label>
                    <input class="register-input" placeholder="example@example.com" type="email" id="email" name="email" required>
                </div>
                <div class="register-input-area">
                    <label for="password">Password:</label>
                    <input class="register-input" placeholder="••••••••" type="password" id="password" name="password" required>
                </div>
                <div class="register-input-area">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input class="register-input" placeholder="••••••••" type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                
                <button class="register-btn" type="submit">Register</button>
            </form>
        </div>
    </body>
</html>