<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lập trình web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .header {
            background-color: #f0f0f0;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
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
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #f0f2f5;
        }
        .footer {
            background-color: #f0f0f0;
            text-align: center;
            padding: 10px;
            border-top: 1px solid #ddd;
        }
        .update-container {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .update-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .update-btn {
            width: 100%;
            padding: 10px;
            background-color: #1877f2;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header">
        <span>Home / Cập nhật</span>
        <div class="header-navigation">
            <a href="#">Đăng nhập</a>
            <a href="#">Đăng ký</a>
        </div>
    </div>

    <div class="content">
        <div class="update-container">
            <h2>Màn hình cập nhật</h2>
            <form>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Nhập lại mật khẩu</label>
                    <input type="password" id="confirm-password" name="confirm-password">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>
                <button type="submit" class="update-btn">Đăng ký</button>
            </form>
        </div>
    </div>

    <div class="footer">
        Lập trình web @2024
    </div>
</body>
</html>