<?php if (!empty($data)): ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php foreach ($data as $k => $v): ?>
                <div class="item <?php echo ($k == 0) ? 'active' : ''; ?>">
                    <img src="<?php echo $v['image_path']; ?>" alt="<?php echo $v['title']; ?>" width="1200" height="700">
                    <div class="carousel-caption">
                        <h3><?php echo $v['title']; ?></h3>
                        <p><?php echo $v['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php endif; ?>
<?php if (empty($isMobile)): ?>
    <div class="home_menu">
        <div class="home_menu_close">x</div>
        <div class="home_menu_image" id="home_menu_image_1">
            <a href="#">
                <img src="<?php echo $BASE_URL; ?>/img/home_img.jpg" />
            </a>
        </div>
        <div class="home_menu_image" id="home_menu_image_2">
            <a href="#">
                <img src="<?php echo $BASE_URL; ?>/img/home_img.jpg" />
            </a>
        </div>
        <div class="home_menu_image" id="home_menu_image_3">
            <a href="#">
                <img src="<?php echo $BASE_URL; ?>/img/home_img.jpg" />
            </a>
        </div>
        <div class="home_menu_image" id="home_menu_image_4">
            <a href="#">
                <img src="<?php echo $BASE_URL; ?>/img/home_img.jpg" />
            </a>
        </div>
        <div class="">
            <div class="home_menu_text" data-image="1">Giá dưới 1m</div>
            <div class="home_menu_text" data-image="2">Giá từ 1-2m</div>
            <div class="home_menu_text" data-image="3">Giá từ 2-4m</div>
            <div class="home_menu_text" data-image="4">Giá trên 4m</div>
        </div>
    </div>
<?php else: ?>
    <div class="home_menu_mobile" id="accordion">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Giá dưới 1m</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <a href="#">
                            <img src="<?php echo $BASE_URL; ?>/img/home_img.jpg" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Giá từ 1-2m</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <a href="#">
                            <img src="<?php echo $BASE_URL; ?>/img/home_img.jpg" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Giá từ 2-4m</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <a href="#">
                            <img src="<?php echo $BASE_URL; ?>/img/home_img.jpg" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Giá trên 4m</a>
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                        <a href="#">
                            <img src="<?php echo $BASE_URL; ?>/img/home_img.jpg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>