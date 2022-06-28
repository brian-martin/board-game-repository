<!-- index.blade.php -->



<?php $__env->startSection('content'); ?>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
      <?php echo e(session()->get('success')); ?>  
    </div><br />
  <?php endif; ?>
  <div>
    <input type="text" id="game-search" />
    <a href="/games/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add Game</a>
  </div>
  <table class="table table-striped" id="games-table">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Publisher</td>
          <td>Nickname</td>
          <td>Rating</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($game->id); ?></td>
            <td><?php echo e($game->name); ?></td>
            <td><?php echo e($game->publisher); ?></td>
            <td><?php echo e($game->nickname); ?></td>
            <td><?php echo e($game->rating); ?></td>
            <td><a href="<?php echo e(route('games.edit', $game->id)); ?>" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="<?php echo e(route('games.destroy', $game->id)); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/games/games/resources/views/index.blade.php ENDPATH**/ ?>