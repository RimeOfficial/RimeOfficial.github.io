<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <h1>Explore</h1>
                <hr>
            </div>

            <div class="col-md-offset-2 col-md-6 col-sm-offset-2 col-sm-8">
                <?php if (!empty($user_list)) $this->view('user/list', array('user_list' => $user_list)); ?>
            </div>

        </div>
    </div>
</section>
