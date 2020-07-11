<div class="enquire-wrapper">
    <div class="side-right">
        <div class="inner">
            <h2>Our Coursce</h2>
            <nav class="navbar navbar-inverse sidebar" role="navigation">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">

                    <ul class="nav navbar-nav nav1">
                       <?php foreach($menus as $menu):?>
                         <?php if(!isset($menu->children))
                         {?>
                           <li> <a href="<?php echo base_url('home/categoryDetails/'.$menu->id);?>"><?php echo $menu->category;?> </a></li>
                      <?php } else{?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menu->category;?> <span class="caret"></span></a>
                              <?php  if(isset($menu->children)){ ?>
                            <ul class="dropdown-menu forAnimate" role="menu">
                              <?php foreach ($menu->children as $child_menu) { ?>
                                <li><a href="<?php echo base_url('home/businessadministration/'.$child_menu->id);?>"><?php echo $child_menu->subcategory;?></a></li>
                                <li class="divider"></li>
                                <?php  } ?>

                            </ul>
                          <?php }
                           else{?>
                             <li> <a href="<?php echo base_url('home/businessadministration/'.$menu->id);?>"></a></li>
                        <?php  }
                         ?>
                        </li>
                       <?php }endforeach; ?>
                    </ul>

                </div>
            </nav>
        </div>
    </div>
</div>
