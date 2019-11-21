<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 my-5">
             <h1> Add Content</h1>
        </div>
        <div class="panel">

        </div>
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo base_url('/index.php/contents/save'); ?>" method="post">
                        <div class="form-group">
                            <label class="label" for="title">Name </label>
                            <input class="form-control" type="text" name="name" placeholder="Name" value="" >
                            <?php if( form_error('name') ) { ?>
                            <div class="alert alert-danger mt-3" role="alert"><?php echo form_error('name');  ?></div>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label class="label" for="description"> Description </label>
                            <textarea rows="4" class="form-control" type="text-area" name="description" placeholder="description" value="" ></textarea>
                            <?php if( form_error('description') ) { ?>
                            <div class="alert alert-danger mt-3" role="alert"> <?php echo form_error('description');  ?></div>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit"> Save </button>
                        </div>
            </form>
                </div>
            </div>

        </div>
    </div>
</div>
