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

        <h5 style="font-weight: 100"> <?php echo e(__('Login')); ?> </h5>
            <div class="divider"></div>

           <?php if($status = Session::get('status')): ?>
            <div class="alert alert-info">
              <?php echo e($status); ?>

            </div>
           <?php endif; ?>

            <form role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="input-field col s12 <?php echo e($errors->has('email') ? ' has-error' : ''); ?>"><i class="material-icons prefix">account_circle</i>
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

                <div class="input-field col s12 <?php echo e($errors->has('password') ? ' has-error' : ''); ?>" required><i class="material-icons prefix">vpn_key</i>
                    <input type="password" name="password" class="validate" min="8" id="password">
                    <label for="password"><?php echo e(__('Password')); ?></label>
                    <?php if($errors->has('password')): ?>
                        <span class="red-text">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <p class="col s12">
                  <input type="checkbox" id="remember" name="remember" />
                  <label for="remember"><?php echo e(__('Remember Me')); ?></label>
                </p>

                <div class="input-field col s12">
                 <button type="submit" class="btn waves-effect waves-light pink"><?php echo e(__('Login')); ?></button>
                 </div>
          
                <div class="margin-top margin center-align medium-small">
                    <h6 class="center-align">SIGN ON WITH</h6>
                     <a class="btn blue btn-facebook">
                   <i class="fa fa-facebook"></i>
                  </a>
                  
                  <a class="btn red facebook">
                   <i class="fa fa-google"> </i>
                  </a>
                </div>
                   
                   <div>
                      <div class="input-field col s6 m6 l6">
                        <p class="margin medium-small">
                           <a class="" href="<?php echo e(url('/register')); ?>">Registrarse</a>
                        </p>
                        </div>
                        <div class="input-field col s6 m6 l6">
                         <p class="margin right-align medium-small">
                            <a class="" href="<?php echo e(url('/password/reset')); ?>"><?php echo e(__('Forgot_Password')); ?></a>
                         </p>
                        </div>
                        
                    </div>
                    
                </div>
            </form>
            
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/auth/layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>