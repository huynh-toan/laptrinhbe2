<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lập trình web</title>
    <link rel="stylesheet" href="resources/css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .header {
            background-color: #f0f0f0;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
        }
        
        .header-navigation {
            display: flex;
            gap: 15px;
        }
        
        .header-navigation a {
            text-decoration: none;
            color: black;
        }
        
        .content {
            flex: 1;
            padding-top: 60px; /* Để nội dung không bị che bởi header cố định */
            display: flex;
            flex-direction: column;
            min-height: calc(100vh - 60px);
            justify-content: center;
            align-items: center;
        }
        
        .welcome-message {
            font-size: 2.5rem;
            font-weight: bold;
            color: #1877f2;
            text-align: center;
            margin: 20px 0;
            animation: fadeIn 1.5s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        footer {
            background-color: #f0f0f0;
            padding: 10px 20px;
            text-align: center;
            border-top: 1px solid #ddd;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <div class="header">
        <span>Home</span>
        <div class="header-navigation">
            <a href="#">Đăng nhập</a>
            <a href="#">Đăng ký</a>
        </div>
    </div>
    
    <div class="content">
        <div class="welcome-message">
            Laravel
        </div>
    </div>
    
    <footer>
        Lập trình web @2024
    </footer>
    
    <script src="resources/js/script.js"></script>
</body>
</html>