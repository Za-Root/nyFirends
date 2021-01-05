<?php
				// session_start();
                include 'database.php';
                include 'loginProcess.php';
                $account= $_SESSION["Account"];
                $query = "select * from ny_users where Account = '$account'";
                $sql=mysqli_query($conn,"SELECT * FROM ny_friends where account='$account' ");
                $result = mysqli_query($conn, $query);
                if($result){
                    if($result && mysqli_num_rows($result) > 0){
                        $user_data = mysqli_fetch_assoc($result);
                        $_SESSION["FirstName"] = $user_data["FirstName"];   
                    }
                }
            ?>

<html>
    <meta charset="utf-8">
        <!-- This is a homepage -->
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style>
            
            div.date{
                text-align: right;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 20px;
            }
            div.id{
                text-align: right;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 20px;
            }
            div.logout{
                text-align: right;
            }
            
        </style>
        <div class = "logo"><img src = "newyorkFriends.jpg"></div>



        <!-- Getting today's date -->
        <div class = "date">  
        <script type = "text/javascript">
                var monthNames = ["1월", "2월", "3월", "4월", "5월","6월","7월", "8월", "9월", "10월", "11월","12월"];
                var today = new Date();
                var ThisDay = today.getDate();
                //var ThisMonth = today.getMonth() + 1;
                var ThisYear = today.getFullYear();
                var monthInNames = monthNames[today.getMonth()]
                document.writeln(monthInNames + " " + ThisDay + "일" + " " + ThisYear +"년");
        </script>
        </div>

        <div class = "id">
            <p>안녕하세요. <?php echo $_SESSION['FirstName']?> 님</p>
        </div>
        <div class = "logout">
            <button type="submit"><a href="logout.php">로그아웃</button>
        </div>
    </head>
    <hr />
    <body>
    <div class="signup-form">
    <form action="home.php" method="post" enctype="multipart/form-data">



   <!-- Welcoming individual -->
 

        <!-- Tabs -->
        <ul class = "nav nav-tabs">
            <li class = "active"><a href = "homepage.php">홈</a></li>
            <li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown" href= "#">재고관리
                <span class="caret"></span></a>
                <ul class = "dropdown-menu">
                    <li><a href = "inventoryCurrent.html">현재 재고</a></li>
                    <li><a href = "inventoryUpdate.html">재고 업데이트</a></li>
                </ul>
            </li>
            <li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown" href= "#">배송관리
                <span class="caret"></span></a>
                <ul class = "dropdown-menu">
                    <li><a href = "shippingNew.html">배송 주문 추출</a></li>
                </ul>
            </li>
            <li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown" href= "#">쿠폰
                <span class="caret"></span></a>
                <ul class = "dropdown-menu">
                    <li><a href = "couponsCurrent.html">사용가능 쿠폰</a></li>
                    <li><a href = "couponsUpdate.html">쿠폰 업데이트</a></li>
                </ul>
            </li>
          
             
        </ul>
    </body>
</html>