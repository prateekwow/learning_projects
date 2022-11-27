<?php 
    $get = $_SERVER['REQUEST_URI'];
    $get = explode('/',$get);
    // echo $get[3]; die();
    include('backend/db.php');
    if(isset($get[3]))
    {
        $sql = "select * from members_detail where phone='$get[3]'";
        $result = $conn->query($sql);
        // var_dump($result); die();
    } else
    {
        header("Location: /association/members");
    }
    
    if ($result->num_rows) {
        $r=1;
        while($row = $result->fetch_assoc()) { 
    ?>
<div class="h60 d-flex align-items-center justify-content-center position-relative bg-img bg-img-fixed">
    <div class="black-overlay"></div>
    <h1 class="mt-5 text-light position-relative"><?=$row['company_name']?></h1>
    <!-- <div class="position-absolute logo mlogo d-flex justify-content-center">
        <a href="javascript::void();" class="text-light position-relative">
            <img src="/association/assets/members/<?=$row['logo']?>" alt="" class="rounded-4 bg-white">
        </a>
    </div> -->
</div>
<div class="container member_detail">
    <div class="row position-relative align-items-center justify-content-evenly mt-5">
        <div class="col-sm-6 col-md-5 col-9 mb-2 text-center member_detail_card">
            <div class="bg-white rounded shadow-sm py-2 py-sm-4 px-sm-4 px-1">
                <img src="/<?=$main_url?>/assets/members/<?=$row['logo']?>" alt="" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0"><?=$row['name']?></h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                <h5 class="my-1"><?=$row['email']?></h5>
                <h5 class="mb-1"><?=$row['phone']?></h5>
                <?php if($row['website']): ?>
                <h5 class="mb-1"><a href="<?=$row['website']?>" target="_blank"><?=$row['website']?></a></h5>
                <?php endif;?>
                <ul class="social mb-0 list-inline mt-3">
                    <?php if($row['twitter']): ?>
                    <li class="list-inline-item"><a href="<?=$row['twitter']?>" class="social-link" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <?php endif;?>
                    <?php if($row['facebook']): ?>
                    <li class="list-inline-item"><a href="<?=$row['facebook']?>" class="social-link" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <?php endif;?>
                    <?php if($row['linkedin']): ?>
                    <li class="list-inline-item"><a href="<?=$row['linkedin']?>" class="social-link" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <?php endif;?>
                    <?php if($row['youtube']): ?>
                    <li class="list-inline-item"><a href="<?=$row['youtube']?>" class="social-link" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container member_form mt-5 mt-md-1">
    <div class="row h-100 flex-column-reverse flex-md-row">
        <div class="col-md-4 my-md-5 px-5">
            <h4 class="mt-2 primary-color text-center">Contact us</h4>
            <?php
                include('includes/form.php');
            ?>  
        </div>
        <div class="col-md-8 d-flex flex-column py-5 mt-md-2 mb-md-5 h80">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <!-- <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button> -->
                    <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">About Us</button>
                </div>
            </nav>
            <div class="tab-content h-100 overflow-auto p-3" id="nav-tabContent">
                <div class="tab-pane fade show active p-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" style="text-align: justify;"><?=$row['about']?></div>
            </div>
        </div>
    </div>
</div>
        <?php 
            } }
        ?>