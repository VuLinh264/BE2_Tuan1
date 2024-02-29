<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Sản phẩm
    </title>
</head>
<body>
<style>
    *{
        padding: 0;
        margin: 0;
    }

    ul{
        display: flex;
    }

    li{
        list-style-type: none;
        margin: 6px;
    }

    a{
        color: #000;
        font-weight: 500;
    }

    .list{
        display: block;
    }

</style>
    <nav class="nav">
        <ul>
            <li><a href="./trangchu">Trang chủ</a></li>
            <li><a href="./gioithieu">Giới Thiệu</a></li>
            <li><a href="./sanpham">Sản Phẩm</a>
                <ul class="list">
                    <li><a href="./ban">Bàn</a></li>
                    <li><a href="./ghe">Ghế</a></li>
                </ul>
            </li>
            <li><a href="./lienhe">Liên hệ</a></li>
        </ul>
    </nav>
    <?php echo "Đây là trang sản phẩm" ?>
</body>
</html>