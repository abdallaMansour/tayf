<?php
    $user_type = Auth::user()->user_type;
    $route_extension = $user_type == config('saas.user_type.subscriber') ? 'subscriber.' : '';
?>

<!--Refunds Module-->
<?php if(auth()->user()->can('Manage Support Ticket') || auth()->user()->user_type == config('saas.user_type.subscriber')): ?>
    <li
        class="<?php echo e(Request::routeIs(['support.ticket.categories', 'create.' . $route_extension . 'support.ticket', 'saas.' . $route_extension . 'support.tickets']) ? 'active sub-menu-opened' : ''); ?>">
        <a href="#">
            <i class="icofont-support"></i>
            <span class="link-title"><?php echo e(translate('Support Ticket')); ?></span>
        </a>
        <ul class="nav sub-menu">
            <li class="<?php echo e(Request::routeIs(['create.' . $route_extension . 'support.ticket']) ? 'active ' : ''); ?>">
                <a href="<?php echo e(route('create.' . $route_extension . 'support.ticket')); ?>"><?php echo e(translate('Create Ticket')); ?></a>
            </li>
            <li class="<?php echo e(Request::routeIs(['saas.' . $route_extension . 'support.tickets']) ? 'active ' : ''); ?>">
                <a href="<?php echo e(route('saas.' . $route_extension . 'support.tickets')); ?>"><?php echo e(translate('All Tickets')); ?></a>
            </li>
            <?php if($user_type != config('saas.user_type.subscriber')): ?>
                <li class="<?php echo e(Request::routeIs(['support.ticket.categories']) ? 'active ' : ''); ?>">
                    <a href="<?php echo e(route('support.ticket.categories')); ?>"><?php echo e(translate('Categories')); ?></a>
                </li>
            <?php endif; ?>
        </ul>
    </li>
    <!--End Refunds Module-->
<?php endif; ?>
<?php /**PATH /home/u768514428/domains/tayf.ae/public_html/plugins/support-ticket/views/includes/navbar.blade.php ENDPATH**/ ?>