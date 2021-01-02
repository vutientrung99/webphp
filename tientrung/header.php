<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
	<a class="navbar-brand" href="index.php"><strong>DIENTHOAITRUNG</strong></a>
            </div>
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
				<?php if (!isset($_SESSION['tendn']))
				{?>
                    <li><a href="dangnhap.php">đăng nhập</a></li>
                    <li><a href="dangki.php">đăng kí</a></li>
				<?php }
				else
				{?>
				 <li><a href="thoat.php">Đăng Xuất</a> </li>
				<li><a href="thongtinkhachhang.php">Thông tin khách hàng</a></li><?php }?>
			
					
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">liên hệ <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><strong>Call: </strong>+037-711-9465</a></li>
                            <li><a href="#"><strong>Mail: </strong>DH51701784@student.stu.edu.vn</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><strong>Address: </strong>
                                <div>
                                    Trường ĐH Công Nghệ Sài Gòn<br />
									TP.Hồ Chí Minh
                                </div>
                            </a></li>
                        </ul>
                    </li>
                </ul>
                <form action="index.php" class="navbar-form navbar-right" role="search" method="get">
                    <div class="form-group">
                        <input type="text" value="<?php echo isset($_GET['key'])?$_GET['key']:""?>" name="key" placeholder="Nhập sản phẩm..." class="form-control">
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-primary">tìm kiếm</button>
                </form>
            </div>
			 </div>