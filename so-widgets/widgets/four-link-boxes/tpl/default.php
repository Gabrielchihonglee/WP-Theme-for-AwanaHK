<div class="" id="" tabindex="" style="color:white; font-size:30px; text-align:center; padding-top:35px; padding-bottom:35px;">
    <style>
        .bigrightbtn {
            font-size: 16px;
            background-color: #fff;
            border-radius: 100%;
            padding-left: 10px;
            padding-right: 8px;
            padding-top: 7px;
            padding-bottom: 7px;
            font-weight: bold;
        }
        
        .bigbtndiv {
            width: 100%;
            padding-top: 34px;
            padding-bottom: 34px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .bigbtndivone:hover {
            background-color: #ffa47f !important;
        }
        
        .bigbtndivone:hover i {
            color: #ffa47f !important;
        }
        
        .bigbtndivtwo:hover {
            background-color: #a6ced8 !important;
        }
        
        .bigbtndivtwo:hover i {
            color: #a6ced8 !important;
        }
        
        .bigbtndivthree:hover {
            background-color: #aacea2 !important;
        }
        
        .bigbtndivthree:hover i {
            color: #aacea2 !important;
        }
        
        .bigbtndivfour:hover {
            background-color: #f3da74 !important;
        }
        
        .bigbtndivfour:hover i {
            color: #f3da74 !important;
        }
        
        @media screen and (max-width: 991px) {
            .four-link-box-margin-special {
                margin-bottom: 30px;
            }
        }
        
        @media screen and (max-width: 766px) {
            .four-link-box-margin-special-two {
                margin-bottom: 30px;
            }
        }
    </style>
    <div class="col-md-3 col-sm-6 four-link-box-margin-special" style="">
        <div onclick="location.href='<?php echo $instance['link_one'] ?>';" class="bigbtndiv bigbtndivone" style="background-color: <?php echo $instance['color_one'] ?>; color:#fff; cursor:pointer;">
            <?php echo $instance['text_one'] ?>
                <br><i class="fa fa-chevron-circle-right bigrightbtn" style="color:#fff;" aria-hidden="true"></i></div>
    </div>
    <div class="col-md-3 col-sm-6 four-link-box-margin-special" style="">
        <div onclick="location.href='<?php echo $instance['link_two'] ?>';" class="bigbtndiv bigbtndivtwo" style="background-color: <?php echo $instance['color_two'] ?>; color:#fff; cursor:pointer;">
            <?php echo $instance['text_two'] ?>
                <br><i class="fa fa-chevron-circle-right bigrightbtn" style="color:#fff;" aria-hidden="true"></i></div>
    </div>
    <div class="col-md-3 col-sm-6 four-link-box-margin-special-two" style="">
        <div onclick="location.href='<?php echo $instance['link_three'] ?>';" class="bigbtndiv bigbtndivthree" style="background-color: <?php echo $instance['color_three'] ?>; color:#fff; cursor:pointer;">
            <?php echo $instance['text_three'] ?>
                <br><i class="fa fa-chevron-circle-right bigrightbtn" style="color:#fff;" aria-hidden="true"></i></div>
    </div>
    <div class="col-md-3 col-sm-6" style="margin-bottom:35px;">
        <div onclick="location.href='<?php echo $instance['link_four'] ?>';" class="bigbtndiv bigbtndivfour" style="background-color: <?php echo $instance['color_four'] ?>; color:#fff; cursor:pointer;">
            <?php echo $instance['text_four'] ?>
                <br><i class="fa fa-chevron-circle-right bigrightbtn" style="color:#fff;" aria-hidden="true"></i></div>
    </div>
</div>