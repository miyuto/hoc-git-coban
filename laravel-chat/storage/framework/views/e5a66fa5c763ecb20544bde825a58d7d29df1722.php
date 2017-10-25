<html>
<head>
    <title>Demo Chat</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>
<body>
    <div>
        <?php $__currentLoopData = $message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mess): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><strong><?php echo e($mess->author); ?></strong> : <?php echo e($mess->contents); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</body>
    <form  action="post-send-message" method="POST">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        Name : <input type="text" name="author">
        <br><br>
        Content : <textarea rows="5" name="contents" style="width: 100%"></textarea>
        <br>
        <button name="send" type="submit">Send to</button>
    </form>
</body>
</html>