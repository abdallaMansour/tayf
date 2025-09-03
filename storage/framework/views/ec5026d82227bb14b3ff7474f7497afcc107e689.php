<?php
    $user_type = Auth::user()->user_type;
?>

<?php if($user_type != config('saas.user_type.subscriber')): ?>
    <?php if(auth()->user()->can('Manage Packages')): ?>
        <li
            class="<?php echo e(Request::routeIs(['plugin.saas.package.plans', 'plugin.saas.create.package', 'plugin.saas.edit.package', 'plugin.saas.packages']) ? 'active sub-menu-opened' : ''); ?>">
            <a href="#">
                <i class="icofont-package"></i>
                <span class="link-title"><?php echo e(translate('Packages')); ?></span>
            </a>
            <ul class="nav sub-menu">
                <li class="<?php echo e(Request::routeIs('plugin.saas.create.package') ? 'active ' : ''); ?>">
                    <a href="<?php echo e(route('plugin.saas.create.package')); ?>"><?php echo e(translate('Add New Package')); ?></a>
                </li>
                <li class="<?php echo e(Request::routeIs('plugin.saas.packages') ? 'active ' : ''); ?>">
                    <a href="<?php echo e(route('plugin.saas.packages')); ?>"><?php echo e(translate('All Packages')); ?></a>
                </li>
                <li class="<?php echo e(Request::routeIs('plugin.saas.package.plans') ? 'active ' : ''); ?>">
                    <a href="<?php echo e(route('plugin.saas.package.plans')); ?>"><?php echo e(translate('Package Plans')); ?></a>
                </li>
            </ul>
        </li>
    <?php endif; ?>

    <?php if(auth()->user()->can('Manage Coupons')): ?>
        <li
            class="<?php echo e(Request::routeIs(['plugin.saas.create.coupons', 'plugin.saas.edit.coupon', 'plugin.saas.create.coupons', 'plugin.saas.coupons']) ? 'active sub-menu-opened' : ''); ?>">
            <a href="#">
                <i class="icofont-gift"></i>
                <span class="link-title"><?php echo e(translate('Coupons')); ?></span>
            </a>
            <ul class="nav sub-menu">
                <li class="<?php echo e(Request::routeIs('plugin.saas.create.coupons') ? 'active ' : ''); ?>">
                    <a href="<?php echo e(route('plugin.saas.create.coupons')); ?>"><?php echo e(translate('Create New Coupon')); ?></a>
                </li>
                <li class="<?php echo e(Request::routeIs('plugin.saas.coupons') ? 'active ' : ''); ?>">
                    <a href="<?php echo e(route('plugin.saas.coupons')); ?>"><?php echo e(translate('All Coupons')); ?></a>
                </li>
            </ul>
        </li>
    <?php endif; ?>

    <?php if(auth()->user()->can('Manage Payments')): ?>
        <li class="<?php echo e(Request::routeIs(['plugin.saas.payments.methods']) ? 'active sub-menu-opened' : ''); ?>">
            <a href="#">
                <i class="icofont-money"></i>
                <span class="link-title"><?php echo e(translate('Payments')); ?></span>
            </a>
            <ul class="nav sub-menu">
                <li class="<?php echo e(Request::routeIs(['plugin.saas.payments.methods']) ? 'active ' : ''); ?>">
                    <a href="<?php echo e(route('plugin.saas.payments.methods')); ?>"><?php echo e(translate('Payment Methods')); ?></a>
                </li>
            </ul>
        </li>
    <?php endif; ?>

    <?php if(auth()->user()->can('Manage SAAS Settings')): ?>
        <li
            class="<?php echo e(Request::routeIs(['plugin.saas.edit.currency', 'plugin.saas.add.currency', 'plugin.saas.all.currencies', 'plugin.saas.general.settings', 'plugin.saas.notification.settings', 'plugin.saas.database-credentials.index', 'plugin.saas.database-credentials.create', 'plugin.saas.database-credentials.show', 'plugin.saas.database-credentials.edit']) ? 'active sub-menu-opened' : ''); ?>">
            <a href="#">
                <i class="icofont-settings"></i>
                <span class="link-title"><?php echo e(translate('SAAS Settings')); ?></span>
            </a>
            <ul class="nav sub-menu">
                <li
                    class="<?php echo e(Request::routeIs(['plugin.saas.edit.currency', 'plugin.saas.add.currency', 'plugin.saas.all.currencies']) ? 'active ' : ''); ?>">
                    <a href="<?php echo e(route('plugin.saas.all.currencies')); ?>"><?php echo e(translate('Currencies')); ?></a>
                </li>
                <li class="<?php echo e(Request::routeIs(['plugin.saas.general.settings']) ? 'active ' : ''); ?>">
                    <a href="<?php echo e(route('plugin.saas.general.settings')); ?>"><?php echo e(translate('General Settings')); ?></a>
                </li>
                <li class="<?php echo e(Request::routeIs(['plugin.saas.notification.settings']) ? 'active ' : ''); ?>">
                    <a
                        href="<?php echo e(route('plugin.saas.notification.settings')); ?>"><?php echo e(translate('Notification Settings')); ?></a>
                </li>
                <li class="<?php echo e(Request::routeIs(['plugin.saas.database-credentials.index', 'plugin.saas.database-credentials.create', 'plugin.saas.database-credentials.show', 'plugin.saas.database-credentials.edit']) ? 'active ' : ''); ?>">
                    <a href="<?php echo e(route('plugin.saas.database-credentials.index')); ?>"><?php echo e(translate('Database Credentials')); ?></a>
                </li>
            </ul>
        </li>
    <?php endif; ?>

    <?php if(auth()->user()->can('Manage Subscriptions')): ?>
        <li
            class="<?php echo e(Request::routeIs(['plugin.saas.subscriber.edit', 'plugin.saas.store.details', 'plugin.saas.subscriber.details', 'plugin.saas.all.stores', 'plugin.saas.admin.payment.history', 'plugin.saas.customers.list', 'plugin.saas.admin.custom.domain.request']) ? 'active sub-menu-opened' : ''); ?>">
            <a href="#">
                <i class="icofont-users-alt-1"></i>
                <span class="link-title"><?php echo e(translate('Subscriptions')); ?></span>
            </a>
            <ul class="nav sub-menu">
                <li class="<?php echo e(Request::routeIs(['plugin.saas.customers.list']) ? 'active ' : ''); ?>">
                    <a href="<?php echo e(route('plugin.saas.customers.list')); ?>"><?php echo e(translate('All Subscribers')); ?></a>
                </li>
                <li class="<?php echo e(Request::routeIs(['plugin.saas.all.stores']) ? 'active ' : ''); ?>">
                    <a href="<?php echo e(route('plugin.saas.all.stores')); ?>"><?php echo e(translate('All Stores')); ?></a>
                </li>
                <li class="<?php echo e(Request::routeIs(['plugin.saas.admin.payment.history']) ? 'active ' : ''); ?>">
                    <a
                        href="<?php echo e(route('plugin.saas.admin.payment.history')); ?>"><?php echo e(translate('Payment Histories')); ?></a>
                </li>
                <li class="<?php echo e(Request::routeIs(['plugin.saas.admin.custom.domain.request']) ? 'active ' : ''); ?>">
                    <a
                        href="<?php echo e(route('plugin.saas.admin.custom.domain.request')); ?>"><?php echo e(translate('Custom Domains')); ?></a>
                </li>
            </ul>
        </li>
    <?php endif; ?>
<?php else: ?>
    <?php echo $__env->make('plugin/saas::user.panel.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH /home/u768514428/domains/tayf.ae/public_html/plugins/saas/views/includes/navbar.blade.php ENDPATH**/ ?>