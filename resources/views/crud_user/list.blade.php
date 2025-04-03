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
            padding: 20px;
            background-color: #f0f2f5;
        }
        .footer {
            background-color: #f0f0f0;
            text-align: center;
            padding: 10px;
            border-top: 1px solid #ddd;
        }
        .user-list-container {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #ddd;
            margin: 0 4px;
        }
        .pagination a.active {
            background-color: #1877f2;
            color: white;
            border: 1px solid #1877f2;
        }
    </style>
</head>
<body>
    <div class="header">
        <span>Home / Đăng xuất</span>
        <div class="header-navigation">
            <a href="#">Đăng nhập</a>
            <a href="#">Đăng ký</a>
        </div>
    </div>

    <div class="content">
        <div class="user-list-container">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>UPVH</td>
                        <td>ATI79@gmail.com</td>
                        <td>[Edit] [View] [Delete]</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>IFUK</td>
                        <td>KUL89@gmail.com</td>
                        <td>[Edit] [View] [Delete]</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>DZZQ</td>
                        <td>ENN6@gmail.com</td>
                        <td>[Edit] [View] [Delete]</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>NIYY</td>
                        <td>ROE@gmail.com</td>
                        <td>[Edit] [View] [Delete]</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>YUMG</td>
                        <td>KTN1@gmail.com</td>
                        <td>[Edit] [View] [Delete]</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>WGSU</td>
                        <td>CYTI@gmail.com</td>
                        <td>[Edit] [View] [Delete]</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>WKRQ</td>
                        <td>MHO2@gmail.com</td>
                        <td>[Edit] [View] [Delete]</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>KZOR</td>
                        <td>VL2V@gmail.com</td>
                        <td>[Edit] [View] [Delete]</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>HGGO</td>
                        <td>OYTA@gmail.com</td>
                        <td>[Edit] [View] [Delete]</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>PXZX</td>
                        <td>VSML@gmail.com</td>
                        <td>[Edit] [View] [Delete]</td>
                    </tr>
                </tbody>
            </table>
            <div class="pagination">
                <a href="#">Previous</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">Next</a>
            </div>
        </div>
    </div>

    <div class="footer">
        Lập trình web @2024
    </div>
</body>
</html>