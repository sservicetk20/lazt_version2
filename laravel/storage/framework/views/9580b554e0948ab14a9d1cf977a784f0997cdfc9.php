<?php $__env->startSection('title', 'Mi Perfil'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make("admin.home.partials.sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                
       
    <div class="col-md-4">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo e(__('Profile')); ?></h5>
            </div>
            
            <div>
                <div class="ibox-content no-padding border-left-right">
                    <img alt="image" class="img-responsive" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg">
                </div>
                <div class="ibox-content profile-content">
                    <h4><strong><?php echo e($users->name); ?></strong></h4>
                    <p><i class="fa fa-map-marker"></i> <?php echo e($users->email); ?></p>
                    <h5>
                        Lazt.us
                    </h5>
                    <p class="text-justify">
                        Para confirmar el momento de su muerte y saber cuando debemos ejecutar sus deseos, por favor ingrese hasta 10 emails de personas que podrán ingresar a este portal y notificarnos que Ud ha muerto.
                    </p>
                    <p class="text-justify">
                       Tu plan Actual : <strong> <?php echo e($users->plan); ?> </strong> <a href="#">actualiza tu plan para obtener beneficios</a>
                    </p>
                    
                    <div class="row m-t-lg">
                        <div class="col-md-6">
                            <span class="bar">Tipo de usuario</span>
                            <h5><strong>Tipo: </strong> <?php echo e($users->type); ?></h5>
                        </div>
                        <div class="col-md-6">
                            <span class="line"><?php echo e(__('Profile_Cod')); ?></span>
                            <h5><strong>Cod: </strong> <?php echo e($users->cod_user); ?></h5>
                        </div>
                    </div>
                    <div class="user-button">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="<?php echo e(url('admin/angels')); ?>" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Invitar </a>
                            </div>
                            <div class="col-md-6">
                                <a href="<?php echo e(route('profiles.edit', $users->id)); ?>" class="btn btn-danger btn-sm btn-block"><i class="fa fa-edit"></i> Editar Perfil </a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>    
         </div>
           <div class="col-md-8">
            <div class="ibox float-e-margins">
             <div class="ibox-title"><h5>Información</h5></div>
             <div class="ibox-content profile-content">
             <p class="text-justify">Los ángeles son personas que desees activar como usuarios de la
             plataforma que podrán entrar a este web y notificar que has fallecido
             cuando esto suceda, para que tus deseos se ejecuten.Podrás agregar los 
             ángeles que desees y eliminarlostambién en cualquier momento.</p>
             </div>
            </div>
           </div>
           
           <div class="col-md-8">
            <div class="ibox float-e-margins">
             <div class="ibox-title"><h5>Información</h5></div>
             <div class="ibox-content profile-content">
             <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
             sed diam nonummy nibh euismod tincidunt ut laoreet dolore
             magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
             quis nostrud exerci tation ullamcorper suscipit lobortis nisl
             ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
             dolor in hendrerit in vulputate velit esse molestie consequat,
             vel illum dolore eu feugiat nulla facilisis at vero eros et
             accumsan et iusto odio dignissim qui blandit praesent luptatum
             zzril delenit augue duis dolore te feugait nulla facilisi.
             Nam liber tempor cum soluta nobis eleifend option congue
             nihil imperdiet doming id quod mazim placerat facer possim
             assum. Typi non habent claritatem insitam; est usus legentis
             in iis qui facit eorum claritatem. Investigationes
             demonstraverunt lectores legere me lius quod ii legunt saepius.
             Claritas est etiam processus dynamicus, qui sequitur mutationem
             consuetudium lectorum. Mirum est notare quam littera gothica,
             quam nunc putamus parum claram, anteposuerit litterarum formas
             humanitatis per seacula quarta decima et quinta decima. Eodem
             modo typi, qui nunc nobis videntur parum clari, fiant sollemnes
             in futurum.</p>
            </div>
             <!--Estadistica de invitaciones-->
              <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Mis Angeles</h5>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <div id="gauge"></div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
             <!---->
      </div>
    </div>
  </div>
 </div>
</div>

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>