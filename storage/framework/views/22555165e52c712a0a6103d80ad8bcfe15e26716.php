

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new Question</div>
                <div class="card-body">
                    <form method="post" action="/questionnaires/<?php echo e($questionnaire->id); ?>/questions">
                        
                        <div class="form-group">
                        <label for="question">Question</label>
        <input type="text" name="question[question]" class="form-control" 
        id="questions" aria-describedby="questionsHelp" placeholder="Enter Question" value="<?php echo e(old('question.question')); ?>">
    <small id="questionsHelp" class="form-text text-muted">Enter your Question </small>
    <?php $__errorArgs = ['question.question'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-danger"><?php echo e($message); ?></small>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
<div class="form-group">
    <fieldset>
        <legend>Choices</legend>
    <small id="choicesHelp" class="form-text text-muted">Insert Choices for your question</small>

        <div>
                 <div class="form-group">
                        <label for="answer1">Choice 1</label>
        <input type="text" name="answers[][answer]" class="form-control" 
        id="answer1" aria-describedby="choiceHelp" placeholder="Enter choice 1" value="<?php echo e(old('answers.0.answer')); ?>">
    <?php $__errorArgs = ['answers.0.answer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-danger"><?php echo e($message); ?></small>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
        </div>

       <div>
                 <div class="form-group">
                        <label for="answer2">Choice 2</label>
        <input type="text" name="answers[][answer]" class="form-control" 
        id="answer2" aria-describedby="choiceHelp" placeholder="Enter choice 2" value="<?php echo e(old('answers.1.answer')); ?>">
    <?php $__errorArgs = ['answers.1.answer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-danger"><?php echo e($message); ?></small>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
        </div>

               <div>
                 <div class="form-group">
                        <label for="answer3">Choice 3</label>
        <input type="text" name="answers[][answer]" class="form-control" 
        id="answer3" aria-describedby="choiceHelp" placeholder="Enter choice 3" value="<?php echo e(old('answers.2.answer')); ?>">
    <?php $__errorArgs = ['answers.2.answer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-danger"><?php echo e($message); ?></small>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
        </div>

               <div>
                 <div class="form-group">
                        <label for="answer4">Choice 4</label>
        <input type="text" name="answers[][answer]" class="form-control" 
        id="answer4" aria-describedby="choiceHelp" placeholder="Enter choice 4" value="<?php echo e(old('answers.3.answer')); ?>">
    <?php $__errorArgs = ['answers.3.answer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-danger"><?php echo e($message); ?></small>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
        </div>


    </fieldset>

</div>
<button class="btn btn-primary" type="submit">Add Question</button>
<?php echo csrf_field(); ?>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saik\Desktop\Internship\new-project\resources\views/question/create.blade.php ENDPATH**/ ?>