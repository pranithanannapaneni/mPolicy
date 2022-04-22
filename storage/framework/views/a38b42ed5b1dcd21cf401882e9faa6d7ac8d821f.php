  
<?php $__env->startSection('content'); ?>
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Register</div>
                  <div class="card-body">
  
                      <form action="<?php echo e(route('register.post')); ?>" method="POST">
                          <?php echo csrf_field(); ?>
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="name" class="form-control" name="name" required autofocus>
                                  <?php if($errors->has('name')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                  <?php endif; ?>
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">EMail</label>
                              <div class="col-md-6">
                                  <input type="text" id="email" class="form-control" name="email" required autofocus>
                                  <?php if($errors->has('email')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                  <?php endif; ?>
                              </div>
                          </div>

                          <div class="form-group row">
                            <label for="mobileno" class="col-md-4 col-form-label text-md-right">Mobileno</label>
                            <div class="col-md-6">
                                <input type="integer" id="mobileno" class="form-control" name="mobileno" required autofocus>
                                <?php if($errors->has('mobileno')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('mobileno')); ?></span>
                                <?php endif; ?>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="dateofbirth" class="col-md-4 col-form-label text-md-right">Dateofbirth</label>
                            <div class="col-md-6">
                                <input type="text" id="dateofbirth" class="form-control" name="dateofbirth" required autofocus>
                                <?php if($errors->has('dateofbirth')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('dateofbirth')); ?></span>
                                <?php endif; ?>
                            </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  <?php if($errors->has('password')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                  <?php endif; ?>
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Register
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pranitha/Documents/IBS/mpolicy/resources/views/auth/registration.blade.php ENDPATH**/ ?>