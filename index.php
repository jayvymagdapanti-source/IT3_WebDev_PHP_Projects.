<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Junior Software Engineer</title>
    <style>
        body {
            margin: 0;
            background-color: #f0f4f8; /* Light background */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }
        .card {
            background-color: white;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
            max-width: 400px;
            text-align: center;
        }
        h1 {
            font-weight: 900;
            margin-bottom: 10px;
        }
        p.bio {
            font-style: italic;
            margin-bottom: 20px;
        }
        ul {
            text-align: left;
            padding-left: 20px;
            margin-bottom: 25px;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        .system-info {
            margin-top: 30px;
            border-left: 4px solid teal;
            padding-left: 15px;
            text-align: left;
            font-weight: 600;
            color: #333;
            font-size: 0.9rem;
        }
        .system-info h3 {
            margin-top: 0;
            margin-bottom: 7px;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Junior Software Engineer</h1>
    <p><strong>Name:</strong> [Jayvy Magdaraog]</p>
    <p class="bio">"Ready to learn PHP and MySQL this semester!"</p>

    <h3>Current Tech Stack:</h3>
    <ul>
        <li>HTML5 &amp; CSS3</li>
        <li>JavaScript (Basics)</li>
        <li>XAMPP Environment</li>
    </ul>

    <button id="init-btn">Initialize System</button>

    <div class="system-info">
        <h3>Server Status: Online</h3>
        <p><strong>Date & Time:</strong> <?php echo date('F j, Y, g:i a'); ?></p>
        <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
    </div>
</div>

<script>
    document.getElementById('init-btn').addEventListener('click', function() {
        alert('Welcome to the team!');
    });
</script>

</body>
</html>