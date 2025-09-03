<?php
    $tzlist = DateTimeZone::listIdentifiers(DateTimeZone::ALL);
    $active_langs = getAllLanguages();
    $placeholder_info = getPlaceHolderImage();
    $placeholder_image = '';
    $placeholder_image_alt = '';

    if ($placeholder_info != null) {
        $placeholder_image = $placeholder_info->placeholder_image;
        $placeholder_image_alt = $placeholder_info->placeholder_image_alt;
    }
?>

<?php $__env->startSection('title'); ?>
    <?php echo e(translate('General Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('/public/backend/assets/plugins/select2/select2.min.css')); ?>">
    <link href="<?php echo e(asset('/public/backend/assets/plugins/summernote/summernote-lite.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main_content'); ?>
    <!-- General settings form -->
    <div class="row">
        <div class="col-md-7 mb-30 mx-auto">
            <div class="card">
                <div class="card-header bg-white border-bottom2 pb-0">
                    <div class="post-head d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <div class="content">
                                <h4><?php echo e(translate('General Settings')); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <form action="<?php echo e(route('core.store.general.settings')); ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black text-capitalize"><?php echo e(translate('Site Title')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="system_name" class="theme-input-style"
                                        value="<?php echo e(isset($data['system_name']) ? $data['system_name'] : ''); ?>"
                                        placeholder="<?php echo e(translate('Site Title')); ?>">
                                    <?php if($errors->has('system_name')): ?>
                                        <div class="invalid-input"><?php echo e($errors->first('system_name')); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Site Motto')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="site_moto" class="theme-input-style"
                                        value="<?php echo e(isset($data['site_moto']) ? $data['site_moto'] : ''); ?>"
                                        placeholder="<?php echo e(translate('Site Moto')); ?>">
                                    <?php if($errors->has('site_moto')): ?>
                                        <div class="invalid-input"><?php echo e($errors->first('site_moto')); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Logo')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="hidden" name="white_background_logo" id="white_background_logo_id"
                                        value="<?php echo e(isset($data['white_background_logo_id']) ? $data['white_background_logo_id'] : ''); ?>">
                                    <div class="image-box">
                                        <div class="d-flex flex-wrap gap-10 mb-3">
                                            <?php if(isset($data['white_background_logo'])): ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($data['white_background_logo'])); ?>"
                                                        width="150" class="preview_image"
                                                        id="white_background_logo_preview" />
                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three" id="white_background_logo_remove"
                                                        onclick="removeSelection('#white_background_logo_preview,#white_background_logo_id,#white_background_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php else: ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($placeholder_image)); ?>" width="150"
                                                        class="preview_image" id="white_background_logo_preview" />

                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three d-none"
                                                        id="white_background_logo_remove"
                                                        onclick="removeSelection('#white_background_logo_preview,#white_background_logo_id,#white_background_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="image-box-actions">
                                            <button type="button" class="btn-link" data-toggle="modal"
                                                data-target="#mediaUploadModal" id="white_background_logo_choose"
                                                onclick="setDataInsertableIds('#white_background_logo_preview,#white_background_logo_id,#white_background_logo_remove')">
                                                <?php echo e(translate('Choose image')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php if($errors->has('white_background_logo')): ?>
                                        <div class="invalid-input"><?php echo e($errors->first('white_background_logo')); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Logo (Mobile)')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="hidden" name="white_mobile_background_logo"
                                        id="white_mobile_background_logo_id"
                                        value="<?php echo e(isset($data['white_mobile_background_logo_id']) ? $data['white_mobile_background_logo_id'] : ''); ?>">
                                    <div class="image-box">
                                        <div class="d-flex flex-wrap gap-10 mb-3">
                                            <?php if(isset($data['white_mobile_background_logo'])): ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($data['white_mobile_background_logo'])); ?>"
                                                        width="150" class="preview_image"
                                                        id="white_mobile_background_logo_preview" />
                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three"
                                                        id="white_mobile_background_logo_remove"
                                                        onclick="removeSelection('#white_mobile_background_logo_preview,#white_mobile_background_logo_id,#white_mobile_background_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php else: ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($placeholder_image)); ?>" width="150"
                                                        class="preview_image" id="white_mobile_background_logo_preview" />
                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three d-none"
                                                        id="white_mobile_background_logo_remove"
                                                        onclick="removeSelection('#white_mobile_background_logo_preview,#white_mobile_background_logo_id,#white_mobile_background_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="image-box-actions">
                                            <button type="button" class="btn-link" data-toggle="modal"
                                                data-target="#mediaUploadModal" id="white_mobile_background_logo_choose"
                                                onclick="setDataInsertableIds('#white_mobile_background_logo_preview,#white_mobile_background_logo_id,#white_mobile_background_logo_remove')">
                                                <?php echo e(translate('Choose image')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php if($errors->has('white_mobile_background_logo')): ?>
                                        <div class="invalid-input"><?php echo e($errors->first('white_mobile_background_logo')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Dark Logo')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="hidden" name="black_background_logo" id="black_background_logo_id"
                                        value="<?php echo e(isset($data['black_background_logo_id']) ? $data['black_background_logo_id'] : ''); ?>">
                                    <div class="image-box">
                                        <div class="d-flex flex-wrap gap-10 mb-3">
                                            <?php if(isset($data['black_background_logo'])): ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($data['black_background_logo'])); ?>"
                                                        width="150" class="preview_image"
                                                        id="black_background_logo_preview" />
                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three" id="black_background_logo_remove"
                                                        onclick="removeSelection('#black_background_logo_preview,#black_background_logo_id,#black_background_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php else: ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($placeholder_image)); ?>" width="150"
                                                        class="preview_image" id="black_background_logo_preview" />

                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three d-none"
                                                        id="black_background_logo_remove"
                                                        onclick="removeSelection('#black_background_logo_preview,#black_background_logo_id,#black_background_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="image-box-actions">
                                            <button type="button" class="btn-link" data-toggle="modal"
                                                data-target="#mediaUploadModal" id="black_background_logo_choose"
                                                onclick="setDataInsertableIds('#black_background_logo_preview,#black_background_logo_id,#black_background_logo_remove')">
                                                <?php echo e(translate('Choose image')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php if($errors->has('black_background_logo')): ?>
                                        <div class="invalid-input"><?php echo e($errors->first('black_background_logo')); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Dark Logo (Mobile)')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="hidden" name="black_mobile_background_logo"
                                        id="black_mobile_background_logo_id"
                                        value="<?php echo e(isset($data['black_mobile_background_logo_id']) ? $data['black_mobile_background_logo_id'] : ''); ?>">
                                    <div class="image-box">
                                        <div class="d-flex flex-wrap gap-10 mb-3">
                                            <?php if(isset($data['black_mobile_background_logo'])): ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($data['black_mobile_background_logo'])); ?>"
                                                        width="150" class="preview_image"
                                                        id="black_mobile_background_logo_preview" />
                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three"
                                                        id="black_mobile_background_logo_remove"
                                                        onclick="removeSelection('#black_mobile_background_logo_preview,#black_mobile_background_logo_id,#black_mobile_background_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php else: ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($placeholder_image)); ?>" width="150"
                                                        class="preview_image" id="black_mobile_background_logo_preview" />

                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three d-none"
                                                        id="black_mobile_background_logo_remove"
                                                        onclick="removeSelection('#black_mobile_background_logo_preview,#black_mobile_background_logo_id,#black_mobile_background_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="image-box-actions">
                                            <button type="button" class="btn-link" data-toggle="modal"
                                                data-target="#mediaUploadModal" id="black_mobile_background_logo_choose"
                                                onclick="setDataInsertableIds('#black_mobile_background_logo_preview,#black_mobile_background_logo_id,#black_mobile_background_logo_remove')">
                                                <?php echo e(translate('Choose image')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php if($errors->has('black_mobile_background_logo')): ?>
                                        <div class="invalid-input">
                                            <?php echo e($errors->first('black_mobile_background_logo')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Sticky Logo')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="hidden" name="sticky_background_logo" id="sticky_background_logo_id"
                                        value="<?php echo e(isset($data['sticky_background_logo_id']) ? $data['sticky_background_logo_id'] : ''); ?>">
                                    <div class="image-box">
                                        <div class="d-flex flex-wrap gap-10 mb-3">
                                            <?php if(isset($data['sticky_background_logo'])): ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($data['sticky_background_logo'])); ?>"
                                                        width="150" class="preview_image"
                                                        id="sticky_background_logo_preview" />
                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three" id="sticky_background_logo_remove"
                                                        onclick="removeSelection('#sticky_background_logo_preview,#sticky_background_logo_id,#sticky_background_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php else: ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($placeholder_image)); ?>" width="150"
                                                        class="preview_image" id="sticky_background_logo_preview" />

                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three d-none"
                                                        id="sticky_background_logo_remove d-none"
                                                        onclick="removeSelection('#sticky_background_logo_preview,#sticky_background_logo_id,#sticky_background_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="image-box-actions">
                                            <button type="button" class="btn-link" data-toggle="modal"
                                                data-target="#mediaUploadModal" id="sticky_background_logo_choose"
                                                onclick="setDataInsertableIds('#sticky_background_logo_preview,#sticky_background_logo_id,#sticky_background_logo_remove')">
                                                <?php echo e(translate('Choose image')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php if($errors->has('sticky_background_logo')): ?>
                                        <div class="invalid-input"><?php echo e($errors->first('sticky_background_logo')); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Sticky Logo (Mobile)')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="hidden" name="sticky_mobile_background_logo"
                                        id="sticky_mobile_background_logo_id"
                                        value="<?php echo e(isset($data['sticky_mobile_background_logo_id']) ? $data['sticky_mobile_background_logo_id'] : ''); ?>">
                                    <div class="image-box">
                                        <div class="d-flex flex-wrap gap-10 mb-3">
                                            <?php if(isset($data['sticky_mobile_background_logo'])): ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($data['sticky_mobile_background_logo'])); ?>"
                                                        width="150" class="preview_image"
                                                        id="sticky_mobile_background_logo_preview" />
                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three"
                                                        id="sticky_mobile_background_logo_remove"
                                                        onclick="removeSelection('#sticky_mobile_background_logo_preview,#sticky_mobile_background_logo_id,#sticky_mobile_background_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php else: ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($placeholder_image)); ?>" width="150"
                                                        class="preview_image"
                                                        id="sticky_mobile_background_logo_preview" />
                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three d-none"
                                                        id="sticky_mobile_background_logo_remove"
                                                        onclick="removeSelection('#sticky_mobile_background_logo_preview,#sticky_mobile_background_logo_id,#sticky_mobile_background_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="image-box-actions">
                                            <button type="button" class="btn-link" data-toggle="modal"
                                                data-target="#mediaUploadModal" id="sticky_mobile_background_logo_choose"
                                                onclick="setDataInsertableIds('#sticky_mobile_background_logo_preview,#sticky_mobile_background_logo_id,#sticky_mobile_background_logo_remove')">
                                                <?php echo e(translate('Choose image')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php if($errors->has('sticky_mobile_background_logo')): ?>
                                        <div class="invalid-input">
                                            <?php echo e($errors->first('sticky_mobile_background_logo')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Dark Sticky Logo')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="hidden" name="sticky_black_background_logo"
                                        id="sticky_black_background_logo_id"
                                        value="<?php echo e(isset($data['sticky_black_background_logo_id']) ? $data['sticky_black_background_logo_id'] : ''); ?>">
                                    <div class="image-box">
                                        <div class="d-flex flex-wrap gap-10 mb-3">
                                            <?php if(isset($data['sticky_black_background_logo'])): ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($data['sticky_black_background_logo'])); ?>"
                                                        width="150" class="preview_image"
                                                        id="sticky_black_background_logo_preview" />
                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three"
                                                        id="sticky_black_background_logo_remove"
                                                        onclick="removeSelection('#sticky_black_background_logo_preview,#sticky_black_background_logo_id,#sticky_black_background_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php else: ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($placeholder_image)); ?>" width="150"
                                                        class="preview_image" id="sticky_black_background_logo_preview" />

                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three d-none"
                                                        id="sticky_black_background_logo_remove"
                                                        onclick="removeSelection('#sticky_black_background_logo_preview,#sticky_black_background_logo_id,#sticky_black_background_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="image-box-actions">
                                            <button type="button" class="btn-link" data-toggle="modal"
                                                data-target="#mediaUploadModal" id="sticky_black_background_logo_choose"
                                                onclick="setDataInsertableIds('#sticky_black_background_logo_preview,#sticky_black_background_logo_id,#sticky_black_background_logo_remove')">
                                                <?php echo e(translate('Choose image')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php if($errors->has('sticky_black_background_logo')): ?>
                                        <div class="invalid-input">
                                            <?php echo e($errors->first('sticky_black_background_logo')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Dark Sticky Logo (Mobile)')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="hidden" name="sticky_black_mobile_background_logo"
                                        id="sticky_black_mobile_background_logo_id"
                                        value="<?php echo e(isset($data['sticky_black_mobile_background_logo_id']) ? $data['sticky_black_mobile_background_logo_id'] : ''); ?>">
                                    <div class="image-box">
                                        <div class="d-flex flex-wrap gap-10 mb-3">
                                            <?php if(isset($data['sticky_black_mobile_background_logo'])): ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($data['sticky_black_mobile_background_logo'])); ?>"
                                                        width="150" class="preview_image"
                                                        id="sticky_black_mobile_background_logo_preview" />
                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three"
                                                        id="sticky_black_mobile_background_logo_remove"
                                                        onclick="removeSelection('#sticky_black_mobile_background_logo_preview,#sticky_black_mobile_background_logo_id,#sticky_black_mobile_background_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php else: ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($placeholder_image)); ?>" width="150"
                                                        class="preview_image"
                                                        id="sticky_black_mobile_background_logo_preview" />

                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three d-none"
                                                        id="sticky_black_mobile_background_logo_remove"
                                                        onclick="removeSelection('#sticky_black_mobile_background_logo_preview,#sticky_black_mobile_background_logo_id,#sticky_black_mobile_background_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="image-box-actions">
                                            <button type="button" class="btn-link" data-toggle="modal"
                                                data-target="#mediaUploadModal"
                                                id="sticky_black_mobile_background_logo_choose"
                                                onclick="setDataInsertableIds('#sticky_black_mobile_background_logo_preview,#sticky_black_mobile_background_logo_id,#sticky_black_mobile_background_logo_remove')">
                                                <?php echo e(translate('Choose image')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php if($errors->has('sticky_black_mobile_background_logo')): ?>
                                        <div class="invalid-input">
                                            <?php echo e($errors->first('sticky_black_mobile_background_logo')); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Admin Logo-->
                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Admin Logo')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="hidden" name="admin_logo" id="admin_logo_id"
                                        value="<?php echo e(isset($data['admin_logo_id']) ? $data['admin_logo_id'] : ''); ?>">
                                    <div class="image-box">
                                        <div class="d-flex flex-wrap gap-10 mb-3">
                                            <?php if(isset($data['admin_logo'])): ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($data['admin_logo'])); ?>" width="150"
                                                        class="preview_image" id="admin_logo_preview" />
                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three" id="admin_logo_remove"
                                                        onclick="removeSelection('#admin_logo_preview,#admin_logo_id,#admin_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php else: ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($placeholder_image)); ?>" width="150"
                                                        class="preview_image" id="admin_logo_preview" />

                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three d-none" id="admin_logo_remove"
                                                        onclick="removeSelection('#admin_logo_preview,#admin_logo_id,#admin_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="image-box-actions">
                                            <button type="button" class="btn-link" data-toggle="modal"
                                                data-target="#mediaUploadModal" id="admin_logo_choose"
                                                onclick="setDataInsertableIds('#admin_logo_preview,#admin_logo_id,#admin_logo_remove')">
                                                <?php echo e(translate('Choose image')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php if($errors->has('admin_logo')): ?>
                                        <div class="invalid-input"><?php echo e($errors->first('admin_logo')); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Admin Logo (Mobile)')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="hidden" name="admin_mobile_logo" id="admin_mobile_logo_id"
                                        value="<?php echo e(isset($data['admin_mobile_logo_id']) ? $data['admin_mobile_logo_id'] : ''); ?>">
                                    <div class="image-box">
                                        <div class="d-flex flex-wrap gap-10 mb-3">
                                            <?php if(isset($data['admin_mobile_logo'])): ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($data['admin_mobile_logo'])); ?>"
                                                        width="150" class="preview_image"
                                                        id="admin_mobile_logo_preview" />
                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three" id="admin_mobile_logo_remove"
                                                        onclick="removeSelection('#admin_mobile_logo_preview,#admin_mobile_logo_id,#admin_mobile_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php else: ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($placeholder_image)); ?>" width="150"
                                                        class="preview_image" id="admin_mobile_logo_preview" />

                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three d-none"
                                                        id="admin_mobile_logo_remove"
                                                        onclick="removeSelection('#admin_mobile_logo_preview,#admin_mobile_logo_id,#admin_mobile_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="image-box-actions">
                                            <button type="button" class="btn-link" data-toggle="modal"
                                                data-target="#mediaUploadModal" id="admin_mobile_logo_choose"
                                                onclick="setDataInsertableIds('#admin_mobile_logo_preview,#admin_mobile_logo_id,#admin_mobile_logo_remove')">
                                                <?php echo e(translate('Choose image')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php if($errors->has('admin_mobile_logo')): ?>
                                        <div class="invalid-input"><?php echo e($errors->first('admin_mobile_logo')); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Admin Dark Logo')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="hidden" name="admin_dark_logo" id="admin_dark_logo_id"
                                        value="<?php echo e(isset($data['admin_dark_logo_id']) ? $data['admin_dark_logo_id'] : ''); ?>">
                                    <div class="image-box">
                                        <div class="d-flex flex-wrap gap-10 mb-3">
                                            <?php if(isset($data['admin_dark_logo'])): ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($data['admin_dark_logo'])); ?>"
                                                        width="150" class="preview_image"
                                                        id="admin_dark_logo_preview" />
                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three" id="admin_dark_logo_remove"
                                                        onclick="removeSelection('#admin_dark_logo_preview,#admin_dark_logo_id,#admin_dark_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php else: ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($placeholder_image)); ?>" width="150"
                                                        class="preview_image" id="admin_dark_logo_preview" />

                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three d-none" id="admin_dark_logo_remove"
                                                        onclick="removeSelection('#admin_dark_logo_preview,#admin_dark_logo_id,#admin_dark_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="image-box-actions">
                                            <button type="button" class="btn-link" data-toggle="modal"
                                                data-target="#mediaUploadModal" id="admin_dark_logo_choose"
                                                onclick="setDataInsertableIds('#admin_dark_logo_preview,#admin_dark_logo_id,#admin_dark_logo_remove')">
                                                <?php echo e(translate('Choose image')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php if($errors->has('admin_dark_logo')): ?>
                                        <div class="invalid-input"><?php echo e($errors->first('admin_dark_logo')); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Admin Dark Logo (Mobile)')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="hidden" name="admin_dark_mobile_logo" id="admin_dark_mobile_logo_id"
                                        value="<?php echo e(isset($data['admin_dark_mobile_logo_id']) ? $data['admin_dark_mobile_logo_id'] : ''); ?>">
                                    <div class="image-box">
                                        <div class="d-flex flex-wrap gap-10 mb-3">
                                            <?php if(isset($data['admin_dark_mobile_logo'])): ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($data['admin_dark_mobile_logo'])); ?>"
                                                        width="150" class="preview_image"
                                                        id="admin_dark_mobile_logo_preview" />
                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three" id="admin_dark_mobile_logo_remove"
                                                        onclick="removeSelection('#admin_dark_mobile_logo_preview,#admin_dark_mobile_logo_id,#admin_dark_mobile_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php else: ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($placeholder_image)); ?>" width="150"
                                                        class="preview_image" id="admin_dark_mobile_logo_preview" />

                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three d-none"
                                                        id="admin_dark_mobile_logo_remove d-none"
                                                        onclick="removeSelection('#admin_dark_mobile_logo_preview,#admin_dark_mobile_logo_id,#admin_dark_mobile_logo_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="image-box-actions">
                                            <button type="button" class="btn-link" data-toggle="modal"
                                                data-target="#mediaUploadModal" id="admin_dark_mobile_logo_choose"
                                                onclick="setDataInsertableIds('#admin_dark_mobile_logo_preview,#admin_dark_mobile_logo_id,#admin_dark_mobile_logo_remove')">
                                                <?php echo e(translate('Choose image')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php if($errors->has('admin_dark_mobile_logo')): ?>
                                        <div class="invalid-input"><?php echo e($errors->first('admin_dark_mobile_logo')); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Login Page Background Image')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="hidden" name="login_bg_image" id="login_bg_image_id"
                                        value="<?php echo e(isset($data['login_bg_image_id']) ? $data['login_bg_image_id'] : ''); ?>">
                                    <div class="image-box">
                                        <div class="d-flex flex-wrap gap-10 mb-3">
                                            <?php if(isset($data['login_bg_image'])): ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($data['login_bg_image'])); ?>"
                                                        width="150" class="preview_image"
                                                        id="login_bg_image_preview" />
                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three" id="login_bg_image_remove"
                                                        onclick="removeSelection('#login_bg_image_preview,#login_bg_image_id,#login_bg_image_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php else: ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($placeholder_image)); ?>" width="150"
                                                        class="preview_image" id="login_bg_image_preview" />

                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three d-none"
                                                        id="login_bg_image_remove d-none"
                                                        onclick="removeSelection('#login_bg_image_preview,#login_bg_image_id,#login_bg_image_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="image-box-actions">
                                            <button type="button" class="btn-link" data-toggle="modal"
                                                data-target="#mediaUploadModal" id="login_bg_image_choose"
                                                onclick="setDataInsertableIds('#login_bg_image_preview,#login_bg_image_id,#login_bg_image_remove')">
                                                <?php echo e(translate('Choose image')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php if($errors->has('login_bg_image')): ?>
                                        <div class="invalid-input"><?php echo e($errors->first('login_bg_image')); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- /Admin Logo-->

                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Favicon')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="hidden" name="favicon" id="favicon_id"
                                        value="<?php echo e(isset($data['favicon_id']) ? $data['favicon_id'] : ''); ?>">
                                    <div class="image-box">
                                        <div class="d-flex flex-wrap gap-10 mb-3">
                                            <?php if(isset($data['favicon'])): ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($data['favicon'])); ?>" width="150"
                                                        class="preview_image" id="favicon_preview" />
                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three" id="favicon_remove"
                                                        onclick="removeSelection('#favicon_preview,#favicon_id,#favicon_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php else: ?>
                                                <div class="preview-image-wrapper">
                                                    <img src="<?php echo e(project_asset($placeholder_image)); ?>" width="150"
                                                        class="preview_image" id="favicon_preview" />

                                                    <button type="button" title="Remove image"
                                                        class="remove-btn style--three d-none" id="favicon_remove"
                                                        onclick="removeSelection('#favicon_preview,#favicon_id,#favicon_remove')"><i
                                                            class="icofont-close"></i></button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="image-box-actions">
                                            <button type="button" class="btn-link" data-toggle="modal"
                                                data-target="#mediaUploadModal" id="favicon_choose"
                                                onclick="setDataInsertableIds('#favicon_preview,#favicon_id,#favicon_remove')">
                                                <?php echo e(translate('Choose image')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php if($errors->has('favicon')): ?>
                                        <div class="invalid-input"><?php echo e($errors->first('favicon')); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Default Language')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <select class="default-language form-control" name="default_language"
                                        id="default_language" placeholder="<?php echo e(translate('Select default language')); ?>">
                                        <?php $__currentLoopData = $active_langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($lang->status == config('settings.general_status.active')): ?>
                                                <option value="<?php echo e($lang->id); ?>"
                                                    <?php echo e(isset($data['default_language']) && $data['default_language'] == $lang->id ? 'selected' : ''); ?>>
                                                    <?php echo e($lang->name); ?>

                                                </option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('default_language')): ?>
                                        <div class="invalid-input"><?php echo e($errors->first('default_language')); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Select Default Timezone')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <select class="default-timezone form-control" name="default_timezone"
                                        id="default_timezone" placeholder="<?php echo e(translate('Select Default Timezone')); ?>">
                                        <?php $__currentLoopData = $tzlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($tz); ?>"
                                                <?php echo e(isset($data['default_timezone']) && $data['default_timezone'] == $tz ? 'selected' : ''); ?>>
                                                <?php echo e($tz); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('default_timezone')): ?>
                                        <div class="invalid-input"><?php echo e($errors->first('default_timezone')); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row mb-20">
                                <div class="col-md-4">
                                    <label class="font-14 bold black"><?php echo e(translate('Copyright Text')); ?></label>
                                </div>
                                <div class="col-md-8">
                                    <div class="editor-wrap">
                                        <textarea name="copyright_text" id="copyright_text"><?php echo e(isset($data['copyright_text']) ? $data['copyright_text'] : ''); ?></textarea>
                                    </div>
                                    <?php if($errors->has('copyright_text')): ?>
                                        <div class="invalid-input"><?php echo e($errors->first('copyright_text')); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn long"><?php echo e(translate('Submit')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('core::base.media.partial.media_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- /General settings form -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_scripts'); ?>
    <script src="<?php echo e(asset('/public/backend/assets/plugins/select2/select2.min.js')); ?>"></script>
    <!--Editor-->
    <script src="<?php echo e(asset('/public/backend/assets/plugins/summernote/summernote-lite.js')); ?>"></script>
    <!--End Editor-->
    <script type="application/javascript">
    (function($) {
        "use strict";
        initDropzone()
        $(document).ready(function() {
            is_for_browse_file = true
            filtermedia()
            /*Select default language*/
            $('.default-language').select2({
                theme: "classic",
            });
            /*Select default timezone*/
            $('.default-timezone').select2({
                theme: "classic",
            });
            /*Select default currency*/
            $('.default-currency').select2({
                theme: "classic",
            });
            /*Select currency position*/
            $('.currency-position').select2({
                theme: "classic",
            });

            $('#copyright_text').summernote({
                tabsize: 2,
                height: 200,
                codeviewIframeFilter: false,
                codeviewFilter: true,
                codeviewFilterRegex: /<\/*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|ilayer|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|t(?:itle|extarea)|xml)[^>]*>|on\w+\s*=\s*"[^"]*"|on\w+\s*=\s*'[^']*'|on\w+\s*=\s*[^\s>]+/gi,
                toolbar: [
                    ["style", ["style"]],
                    ["font", ["bold", "underline", "clear"]],
                    ["color", ["color"]],
                    ["para", ["ul", "ol", "paragraph"]],
                    ["table", ["table"]],
                    ["insert", ["link", "video"]],
                    ["view", ["fullscreen", "codeview","help"]],
                ],
                placeholder: 'Copyright text',
                callbacks: {
                    onChangeCodeview: function(contents, $editable) {
                        let code = $(this).summernote('code')
                        code = code.replace(
                            /<\/*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|ilayer|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|t(?:itle|extarea)|xml)[^>]*>|on\w+\s*=\s*"[^"]*"|on\w+\s*=\s*'[^']*'|on\w+\s*=\s*[^\s>]+/gi,
                            '')
                        $(this).val(code)
                    }
                }
            });
        })
    })(jQuery);
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('core::base.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u768514428/domains/tayf.ae/public_html/Core/Views/base/general_settings/settings.blade.php ENDPATH**/ ?>