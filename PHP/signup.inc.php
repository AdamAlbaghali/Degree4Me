<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to top, #00fecb, white) no-repeat;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #050505;
        }

        button:active {
            background-color: #004184;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Sign Up</h1>

        <form action="includes/formhandler.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="Email" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="Username" placeholder="Username">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="Pwd" placeholder="Password">
            </div>


            <button>Submit</button>
        </form>
    </div>
</body>

</html>