<?php $__env->startSection('title'); ?>
    <?php echo e(translate('Languages')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main_content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card mb-30">
                <div class="card-body border-bottom2">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h4 class="font-20 mb-2"><?php echo e($language->native_name); ?></h4>
                        <div class="d-flex flex-wrap">
                            <form action="<?php echo e(route('core.language.key.values', ['lang' => $language->id])); ?>" method="GET">
                                <input name="search_key"
                                    value="<?php echo e(request()->has('search_key') ? request()->get('search_key') : null); ?>"
                                    class="theme-input-style" placeholder="Type Search Key & Enter ">
                            </form>
                            <?php if(request()->has('search_key')): ?>
                                <a class="btn btn-danger long mb-auto ml-10"
                                    href="<?php echo e(route('core.language.key.values', ['lang' => $language->id])); ?>"><?php echo e(translate('Clear Filter')); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <form class="form-horizontal" action="<?php echo e(route('core.language.key.values.update')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($language->id); ?>">
                    <div class="table-responsive">
                        <table class="dh-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="w-50"><?php echo e(translate('Key')); ?></th>
                                    <th><?php echo e(translate('Value')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($lang_keys->count() > 0): ?>
                                    <?php $__currentLoopData = $lang_keys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $translation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($key + 1 + ($lang_keys->currentPage() - 1) * $lang_keys->perPage()); ?>

                                            </td>
                                            <td class="key w-50"><?php echo e($translation->lang_value); ?></td>
                                            <td>
                                                <input type="text" class="form-control value" style="width:100%"
                                                    name="values[<?php echo e($translation->lang_key); ?>]"
                                                    <?php if(($traslate_lang = \Core\Models\Translations::where('lang', $language->code)->where('lang_key', $translation->lang_key)->latest()->first()) != null): ?> value="<?php echo e($traslate_lang->lang_value); ?>" <?php endif; ?>>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="3">
                                            <p class="alert alert-danger text-center"><?php echo e(translate('Nothing found')); ?></p>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <?php if($lang_keys->count() > 0): ?>
                            <div class="text-right">
                                <div class="col-12">
                                    <button type="submit" class="btn long"><?php echo e(translate('Save')); ?></button>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="mt-3">
                            <div class="col-12">
                                <?php echo e($lang_keys->onEachSide(1)->appends(request()->input())->links('pagination::bootstrap-5-custom')); ?>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('core::base.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u768514428/domains/tayf.ae/public_html/Core/Views/base/language/lan_key_values.blade.php ENDPATH**/ ?>