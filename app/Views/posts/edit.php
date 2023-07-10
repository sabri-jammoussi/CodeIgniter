<?php

use App\Controllers\PagesController;

 $this->extend('layouts/layout');?>
<?php $this->section('title');?>
Create
<?php $this->endsection('title');?>
<?php $this->section('content');?>
<div class="row my-5">
  <div class="col-md-8 mx-auto">
    <div class="card">
        <h3>
          modifier un client
        </h3>
      <?php echo form_open('PagesController/update/'.$post['id']);?>
            <div class="form-group">
              <?php
                echo form_label("Email");
                ?>
                <?php
                $data = array(
                    'type'  => 'text',
                    'name'  => 'email',
                    'id'    => 'email',
                    'placeholder' => 'insert your email',
                    'class' => 'form-control',
                    'value'=>$post ["email"]
                      );// hhiya moch fichier

                echo form_input($data);
                ?>
                    <?php
                echo form_label("First-name");
                ?>
                <?php
                $data = array(
                    'type'  => 'text',
                    'name'  => 'first_name',
                    'id'    => 'first_name',
                    'placeholder' => 'insert your first_name',
                    'class' => 'form-control',
                    'value'=>$post["first_name"]//nafs el ism eli fel phpMyAdmin
                      );

                echo form_input($data);
                ?>
                   <?php
                echo form_label("Last-name");
                ?>
                <?php
                $data = array(
                    'type'  => 'text',
                    'name'  => 'last_name',
                    'id'    => 'last_name',
                    'placeholder' => 'insert your Last_name',
                    'class' => 'form-control',
                    'value'=>$post ["last_name"]
                      );

                echo form_input($data);
                ?>
                   <?php
                echo form_label("Phone-Number");
                ?>
                <?php
                $data = array(
                    'type'  => 'text',
                    'name'  => 'Phone-Number',
                    'id'    => 'Phone-Number',
                    'placeholder' => 'insert your Phone-Number',
                    'class' => 'form-control',
                    'value'=>$post ["number"]
                      );

                echo form_input($data);
                ?>
                <?php
                echo form_submit('submit', 'submit',[
                  'class'=>'btn btn-primary my-2'
                ]);
                ?>
            </div>
       </form>
    </div>
  </div>
</div>
<?php $this->endsection('content');?> 