<div class="enquire-wrapper">
    <div class="side-right">
        <div class="inner">
            <h2>Our Coursce</h2>
            <nav class="navbar navbar-inverse sidebar" role="navigation">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <?php foreach ($menus as $menu) { ?>
                       <!-- <li><a><?= $menu->text ?></a></li> -->
                       <?php
                       if (isset($menu->children)) {
                           foreach ($menu->children as $child) {
                   ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menu['category']?> <span class="caret"></span></a>
                            <ul class="dropdown-menu forAnimate" role="menu">
                                <li><a href="<?php echo base_url('echo $child['link']');?>"><?php echo $child['subcategory']?></a></li>
                                <li class="divider"></li>

                            </ul>
                        </li>
                        <?php
             }
         }
         ?>
     <?php } ?>
                        
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
