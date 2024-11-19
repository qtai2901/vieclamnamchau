<div class="fb-customerchat"
         page_id="374978409570530" greeting_dialog_display="hide">
      </div>
      
      <header id="header-web">
         <div class="header-top1 w100">
            <div class="container">
               <div class="row">
                     <div id="header-topp" class = "header-topp">
               <div class="cl-right-lang fr">
  
        
        <ul class="swift-lang-r">
             <?php if($logged_in ): ?> 
            <li class="col-md-12 col-xs-12 top-4">
    <div class="avatar">
    <a href="#" class="avatar-link"  data-toggle="dropdown">
        <div class="avatar-content">
            <div class="avatar-img-wrapper">
               <?php if ($result['avt'] !== null && $ntd_id !== null): ?>
                <img src="<?php echo $result['avt']?>" alt="Avatar">
                <?php else:?>
                <span class="avatar-initial" style="margin-left:3px;"><?php echo strtoupper(substr($hoten, 0, 1)); ?></span>
                <?php endif;?>
            </div>
            <span class="avatar-text"><?php echo $hoten ?></span>
            <ul class="dropdown-menu">
                <li><a href="<?php echo $info?>"><?php echo $text?></a></li>
                <li><a href="logout.php">Đăng xuất</a></li>
            </ul>
        </div>
    </a>
</div>



</li>
                
            <?php else: ?>
                <div class="top-row1">
        <div>Người tìm việc</div>
        <div>Nhà tuyển dụng</div>
        </div>
        <div class="top-row">
        <ul class="swift-lang-r">
            <li class="text-center border-right text-white">
               
                <a href="login.php" class="">
                                     Đăng nhập  /
                                    </a>
            </li>
            <li class="text-center text-white">
                <a href="register.php"  data-target="#dangky" class="text-white">
                    Đăng ký
                </a>
            </li>
        </ul>
  



       
        <ul class="swift-lang-r">
            <li class="text-center border-right text-white">
                <a href="loginntd.php" data-target="#dangnhapntd" class="text-white">
                     Đăng nhập  /
                </a>
            </li>
            <li class="text-center text-white">
                <a href="registerntd.php" data-target="#dangkyntd" class="text-white">
                     Đăng ký
                </a>
            </li>
        </ul>
        </div>
        
<?php endif; ?>
        </ul>
    </div>

</div>