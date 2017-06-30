<?php $__env->startSection('content'); ?>
<style type="text/css">
  .form {
    max-width: 350px!important;
}  
</style>
<div class="center">
  <div class="row form z-depth-5 white">
      
       <div class="input-field col s12 center"><br>
         <p class="center">LAZT</p>
        </div>
        
    <h5 style="font-weight: 100"><?php echo e(__('Register')); ?></h5>
    <p><?php echo e(__('mensaje_registro')); ?></p>
        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="input-field col s12<?php echo e($errors->has('name') ? ' has-error' : ''); ?>"><i class="material-icons prefix">account_circle</i>
                  <input id="name" type="text" class="validate" name="name" value="<?php echo e(old('name')); ?>" required>
                  <label for="name"><?php echo e(__('name')); ?></label>
                    <?php if($errors->has('name')): ?>
                        <span class="red-text">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="input-field col s12<?php echo e($errors->has('email') ? ' has-error' : ''); ?>"><i class="material-icons prefix">email</i>
                  <input id="email" type="email" class="validate" name="email" value="<?php echo e(old('email')); ?>" required>
                  <label for="email"><?php echo e(__('E-mail Address')); ?></label>
                    <?php if($errors->has('email')): ?>
                        <div class="col s12">
                            <span class="red-text">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="input-field col s12<?php echo e($errors->has('password') ? ' has-error' : ''); ?>" required><i class="material-icons prefix">vpn_key</i>
                    <input type="password" name="password" class="validate" min="8" id="password">
                    <label for="password"><?php echo e(__('Password')); ?></label>
                    <?php if($errors->has('password')): ?>
                        <span class="red-text">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="input-field col s12<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>"><i class="material-icons prefix">vpn_key</i>
                    <input id="password-confirm" type="password" class="validate" name="password_confirmation">
                    <label><?php echo e(__('Confirm_Password')); ?></label>
                    <?php if($errors->has('password_confirmation')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light pink"><?php echo e(__('Register')); ?></button>
                        
                        <div class="margin-top margin center-align medium-small">
                    <h6 class="center-align">REGISTER WITH</h6>
                     <a class="btn blue btn-facebook">
                   <i class="fa fa-facebook"></i>
                  </a>
                  
                  <a class="btn red facebook">
                   <i class="fa fa-google"> </i>
                  </a>
                </div>
                        
                        <p class="center-align">
                            ¿Ya tienes una cuenta? <a class="" href="<?php echo e(url('/login')); ?>"><?php echo e(__('Have_account')); ?></a>
                        </p>
                    </div>
                </form>
            </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/auth/layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>