<!-- create.blade.php -->



<?php $__env->startSection('content'); ?>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Games Data
  </div>
  <div class="card-body">
    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div><br />
    <?php endif; ?>
      <form method="post" action="<?php echo e(route('games.store')); ?>">
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <label for="country_name">Game Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="cases">Publisher :</label>
              <input type="text" class="form-control" name="publisher"/>
          </div>
          <div class="form-group">
              <label for="cases">Nickname :</label>
              <input type="text" class="form-control" name="nickname"/>
          </div>
          <div class="form-group">
              <label for="cases">Rating :</label>
              <input type="text" class="form-control" name="rating"/>
          </div>
          <button type="submit" class="btn btn-primary">Add Game</button>
      </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/games/games/resources/views/create.blade.php ENDPATH**/ ?>