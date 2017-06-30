<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
 <div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
  <div class="col-lg-12">
   <div class="text-center m-t-lg">
    
    
    <div class="container">
	   <div class="row">
    <div class="col-sm-9 col-md-11">
      <div class="panel panel-default">
       <div class="panel-heading"><h4><?php echo e(__('Profile')); ?></h4></div>
        <div class="panel-body">     
        <div class="box box-info">
        <div class="box-body">
          <div class="col-sm-6">
          <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
           <input id="profile-image-upload" class="hidden" type="file">
            <h3 style="font-weight: 100">Editar Perfil</h3>
             <div class="container text-left">
              <div class="row">
               <div class="col-sm-9 col-md-10 form-horizontal">
             <?php echo Form::open(['route' => ['profiles.update', $users->id], 'method' => 'PUT']); ?>

            
            	<div class="form-group">
            		<?php echo Form::label('name', 'Nombre',['class' =>'col-md-2','control-label'] ); ?>

            		<?php echo Form::text('name', $users->name, ['class' => 'form-control','placeholder' => $users->name]); ?>

            	</div>
            
            	<div class="form-group">
            		<?php echo Form::label('email', 'Correo Electronico',['class' =>'col-md-2','control-label']); ?>

            		<?php echo Form::email('email', $users->email, ['class' => 'form-control','placeholder' => $users->email ]); ?>

            	</div>
            
            	<div class="form-group">
            		<?php echo Form::label('password', 'Contraseña',['class' =>'col-md-2','control-label']); ?>

            		<?php echo Form::password('password', ['class' => 'form-control','placeholder' => '**********']); ?>

            	</div>
            	
            	<div class="form-group">
            		<?php echo Form::submit('Editar',['class' => 'btn btn-primary']); ?>

            		<a class="navbar-right margin-link" href="<?php echo e(url('admin/profiles/show')); ?>"><p><?php echo e(__('Profile_Volver')); ?></p></a>
            	</div>
                <!-- /.box-body -->
                </div></div>              
              </div> 
            </div>
        </div>  
    </div>
</div>
    
   </div>
   </div>
  </div>
  </div>
 </div><br>
<br>
<br>
<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>