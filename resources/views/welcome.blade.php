<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel Project</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
            animation: fadeIn 1s ease;
        }

        .card h1 {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #333;
        }

        .card p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 30px;
        }

        .links {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .links a {
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 10px;
            font-weight: bold;
            color: white;
            transition: transform 0.2s, background 0.3s;
        }

        .links a:first-child {
            background: #4e73df;
        }

        .links a:first-child:hover {
            background: #3656b3;
            transform: translateY(-3px);
        }

        .links a:last-child {
            background: #e83e8c;
        }

        .links a:last-child:hover {
            background: #b92f6b;
            transform: translateY(-3px);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>🚀 Welcome!</h1>
        
        
        <div class="links">
            <a href="/test">🌐 To My Website</a>
            <a href="/layout">📖 To Our Autobiography</a>
        </div>
    </div>

</body>
</html>
