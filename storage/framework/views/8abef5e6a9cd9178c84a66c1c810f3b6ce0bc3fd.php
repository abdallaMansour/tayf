
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['Manage Theme General settings', 'Manage Widget'])): ?>
    <li
        class="<?php echo e(Request::routeIs(['theme.default.options', 'theme.default.widgets']) ? 'active sub-menu-opened' : ''); ?>">
        <a href="#">
            <i class="icofont-ui-theme"></i>
            <span class="link-title"><?php echo e(translate('Theme Options')); ?></span>
        </a>
        <ul class="nav sub-menu">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Manage Theme General settings')): ?>
                <li class="<?php echo e(Request::routeIs(['theme.default.options']) ? 'active ' : ''); ?>">
                    <a href="<?php echo e(route('theme.default.options')); ?>"><?php echo e(translate('General Settings')); ?></a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Manage Widget')): ?>
                <li class="<?php echo e(Request::routeIs('theme.default.widgets') ? 'active ' : ''); ?>">
                    <a href="<?php echo e(route('theme.default.widgets')); ?>"><?php echo e(translate('Widgets')); ?></a>
                </li>
            <?php endif; ?>
        </ul>
    </li>
<?php endif; ?>
<?php /**PATH /home/u768514428/domains/tayf.ae/public_html/themes/default/resources/views/backend/includes/themeOptions.blade.php ENDPATH**/ ?>