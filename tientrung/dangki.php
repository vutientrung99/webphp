<?php include_once"database.php";
if(isset($_GET["action"]))
{
		$sql="select * from dangnhap where tendn ";
		$username   = addslashes($_POST['tendn']);
		$password   = addslashes($_POST['pass']);
		$email      = addslashes($_POST['email']);
		$fullname   = addslashes($_POST['hoten']);
		$password = md5($password);
		if (mysqli_num_rows(mysqli_query($conn,"SELECT tendn FROM dangnhap WHERE tendn='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
	if (mysqli_num_rows(mysqli_query($conn,"SELECT tendn FROM dangnhap WHERE email='$email'")) > 0){
        echo "Tên email này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
	else
	{
		@$addmember = mysqli_query($conn,"
        INSERT INTO dangnhap (
            tendn,
            pass,
            email,
            hoten
			
           
        )
        VALUE (
            '{$username}',
            '{$password}',
            '{$email}',
            '{$fullname}'
            
        )
    ");
	
	 if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='index.php'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
	}
		
		 
		
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>điện thoại Tiến Trung</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             

            <!-- Collect the nav links, forms, and other content for toggling -->
			<?php include"header.php" ?>
            <!-- /.navbar-collapse -->
       
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="well well-lg offer-box text-center"  >

					<span  style="background-image: url("1200x150-5.png")">  </span>
                                
              
               
                </div>
                <div class="main box-border">
                    <div id="mi-slider" class="mi-slider">
                        <ul>

                            <li><a href="#">
                                <img src="assets/img/iphone-11-pro-max-256gb-black-400x400.jpg" alt="img01"><h4>iphone 11 pro max</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/img/iphone-12-pro-max-512gb-191020-021035-200x200.jpg" alt="img02"><h4>iphone 12 pro max</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/img/iphone-11-pro-max-256gb-black-400x400.jpg" alt="img03"><h4>iphone 11 pro max</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/img/iphone-12-mini-128gb-193420-023429-400x400.jpg" alt="img04"><h4>iphone 12 mini hong</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="assets/img/samsung-galaxy-a21s-3gb-055520-045548-400x400.jpg" alt="img05"><h4>samsung galaxy a21s</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/img/samsung-galaxy-a31-trang-new-600x600-400x400.jpg" alt="img06"><h4>samsung galaxy a31</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/img/samsung-galaxy-a51-8gb-blue-600x600-400x400.jpg" alt="img07"><h4>samsung galaxy a51</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/img/samsung-galaxy-note-20-ultra-5g-063420-123447-400x400.jpg" alt="img08"><h4>samsung galaxy note20</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="assets/img/600-vivo-y20-1-400x400.jpg" alt="img09"><h4>vivo y20</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/img/vivo-y20s-xanh-600x600-400x400.jpg" alt="img10"><h4>vivo y20s</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/img/vivo-y12s-162620-112633-400x400.jpg" alt="img11"><h4>vivo y12s</h4>
                            </a></li>
							<li><a href="#">
                                <img src="assets/img/vivo-v20-se-600x600-400x400.jpg" alt="img09"><h4>vivo v20 </h4>
                            </a></li>
                        </ul>
                      
                        <nav>
                            <a href="#">iphone</a>
                            <a href="#">samsung</a>
                            <a href="#">vivo</a>
                           
                        </nav>
                    </div>
                    
                </div>
                <br />
            </div>
            <!-- /.col -->
            
            <div class="col-md-3 text-center">
                <div class=" col-md-12 col-sm-6 col-xs-6" >
                    <div class="offer-text">
                       Giảm 30%
                    </div>
                    <div class="thumbnail product-box">
                        <img src="assets/img/iphone-12-mini-128gb-193420-023429-400x400.jpg" alt="" />
                        <div class="caption">
                            <h3><a href="#">iphone 12 mini </a></h3>
                        </div>
                    </div>
                </div>
                <div class=" col-md-12 col-sm-6 col-xs-6">
                    <div class="offer-text2">
                       Giảm 30% 
                    </div>
                    <div class="thumbnail product-box">
                        <img src="assets/img/iphone-12-pro-max-512gb-191020-021035-200x200.jpg" alt="" />
                        <div class="caption">
                            <h3><a href="#">iphone 12 pro max </a></h3>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="#" class="list-group-item active">dienthoaitrung
                    </a>
                    <ul class="list-group">
					<?php $sql="select * from category";
		$ketqua=mysqli_query($conn,$sql);	
		if (isset($ketqua)) {
 while (
$row = mysqli_fetch_assoc($ketqua))
 { 
 ?>
                        <li class="list-group-item"> <a href="index.php?loaisp=<?php echo $row["loaisp"] ?>"><?php echo $row["loaisp"] ?></a>
                      <span class="label label-success pull-right">6</span>
                        </li>
                        <?php
 }
		}
						?>
                     
                    </ul>
                </div>
                <!-- /.div -->
                
                <!-- /.div -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
               
                <!-- /.div -->
               
                
                <!-- /.row -->
                
                <!-- /.row -->
                <div>
                    <ol class="breadcrumb">
                        <li><a href="index.php">trang chủ</a></li>
                        <li><a>đăng kí</a></li>
                       
                    </ol>
                </div>
                <!-- /.div -->
            
                <!-- /.row -->
                <div class="row">
					
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <h3>Trang đăng ký thành viên</h3>
        <form action="dangki.php?action=do" method="POST">
            <table cellpadding="0" cellspacing="0" border="1">
                <tr>
                    <td>
                        Tênđăngnhập: 
                    </td>
                    <td>
                        <input type="text" name="tendn" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Mậtkhẩu:
                    </td>
                    <td>
                        <input type="password" name="pass" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="email" name="email" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Họvàtên:
                    </td>
                    <td>
                        <input type="text" name="hoten" size="50" />
                    </td>
                </tr>             
            </table>
            <input type="submit" value="Đăng ký" />
            <input type="reset" value="Nhập lại" />
        </form>
                    </div>
						
                    <!-- /.col -->
                </div>
				
                <!-- /.row -->
                <div class="row">
                    <ul class="pagination alg-right-pad">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col -->
        </div>
	
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="col-md-12 download-app-box text-center">

        <span class="glyphicon glyphicon-download-alt" ></span>

    </div>

    <!--Footer -->
    <?php include"footer.php" ?>
    <!-- /.col -->
    <!--Footer end -->
    <!--Core JavaScript file  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    <script src="assets/ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="assets/ItemSlider/js/jquery.catslider.js"></script>
    <script>
        $(function () {

            $('#mi-slider').catslider();

        });
		</script>
</body>
</html>
</html>