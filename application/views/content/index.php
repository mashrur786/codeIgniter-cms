<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 my-5">
            <h1> All Contents </h1>
        </div>
        <div class="col-md-6 offset-md-3">
            <?php if( !empty($content)){ ?>
                <?php foreach($content as $c ) {?>
                    <div class="card mb-5">
                        <div class="card-body">
                             <div class="card-title">
                                <h3><?php echo $c['name'] ?></h3>
                            </div>
                            <div class="card-text">
                                <?php echo $c['description'] ?>
                            </div>
                        </div>
                    </div>
                 <?php } ?>
            <?php } else { ?>
                    <div class="alert alert-secondary" role="alert"> Snap! no content. Why don't you add some <a
                                href="<?php echo base_url('/index.php/contents/add');?>">here</a></div>
            <?php } ?>
        </div>
    </div>
</div>