<?php
    $fonts = getAllFonts();
?>

<h3 class="black mb-3"><?php echo e(translate('Page')); ?></h3>
<input type="hidden" name="option_name" value="page">


<div class="form-group row py-4 border-bottom">
    <div class="col-xl-3">
        <label class="font-16 bold black"><?php echo e(translate('Custom Page Style')); ?>

        </label>
        <span class="d-block"><?php echo e(translate('set custom page style.')); ?></span>
    </div>
    <div class="col-xl-6 offset-xl-1">
        <label class="switch success">
            <input type="hidden" name="custom_page_c" value="0">
            <input type="checkbox"
                <?php echo e(isset($option_settings['custom_page_c']) && $option_settings['custom_page_c'] == 1 ? 'checked' : ''); ?>

                name="custom_page_c" id="custom_page" value="1">
            <span class="control" id="custom_page_switch">
                <span class="switch-off"><?php echo e(translate('Disable')); ?></span>
                <span class="switch-on"><?php echo e(translate('Enable')); ?></span>
            </span>
        </label>
    </div>
</div>



<div id="custom_page_switch_on_field">
    
    <div class="form-group row py-4 border-bottom">
        <div class="col-xl-4">
            <label class="font-16 bold black"><?php echo e(translate('Select layout')); ?>

            </label>
            <span
                class="d-block"><?php echo e(translate('Choose your page layout. If you use this option then you will able to choose three type of page layout ( Default no sidebar ).')); ?></span>
        </div>
        <div class="col-xl-6 offset-xl-1 row" id="page_layout_c_image_field">
            <div class="col-4">
                <div class="input-group col-xl-5">
                    <input type="radio" class="d-none"
                        <?php echo e(isset($option_settings['page_layout_c']) && $option_settings['page_layout_c'] == 'no_sidebar' ? 'checked' : ''); ?>

                        name="page_layout_c" id="no_sidebar" value="no_sidebar">
                    <label for="no_sidebar">
                        <img src="<?php echo e(asset('themes/default/public/assets/images/layout/no-sideber.png')); ?>"
                            title="1 layout" alt="1 layout" class="layout_img">
                    </label>
                </div>
            </div>
            <div class="col-4">
                <div class="input-group col-xl-5">
                    <input type="radio" class="d-none"
                        <?php echo e(isset($option_settings['page_layout_c']) && $option_settings['page_layout_c'] == 'left_sidebar' ? 'checked' : ''); ?>

                        name="page_layout_c" id="left_sidebar" value="left_sidebar">
                    <label for="left_sidebar">
                        <img src="<?php echo e(asset('themes/default/public/assets/images/layout/left-sideber.png')); ?>"
                            title="2 layout" alt="2 layout" class="layout_img">
                    </label>
                </div>
            </div>
            <div class="col-4">
                <div class="input-group col-xl-5">
                    <input type="radio" class="d-none"
                        <?php echo e(isset($option_settings['page_layout_c']) && $option_settings['page_layout_c'] == 'right_sidebar' ? 'checked' : ''); ?>

                        name="page_layout_c" id="right_sidebar" value="right_sidebar">
                    <label for="right_sidebar">
                        <img src="<?php echo e(asset('themes/default/public/assets/images/layout/right-sideber.png')); ?>"
                            title="3 layout" alt="3 layout" class="layout_img">
                    </label>
                </div>
            </div>

        </div>
    </div>
    

    
    <div class="form-group row py-4 border-bottom" id="page_sidebar_setting_field">
        <div class="col-xl-4">
            <label class="font-16 bold black"><?php echo e(translate('Sidebar Settings')); ?>

            </label>
            <span
                class="d-block"><?php echo e(translate('Set page sidebar. If you use this option then you will able to set three type of sidebar ( Default no sidebar ).')); ?></span>
        </div>
        <div class="col-xl-6 offset-xl-1">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-light sm">
                    <input type="radio" class="d-none"
                        <?php echo e(isset($option_settings['page_sidebar_setting_c']) && $option_settings['page_sidebar_setting_c'] == 'page_sidebar' ? 'checked' : ''); ?>

                        name="page_sidebar_setting_c" id="page_sidebar" value="page_sidebar">
                    <?php echo e(translate('Page Sidebar')); ?>

                </label>
                <label class="btn btn-light sm">
                    <input type="radio" class="d-none"
                        <?php echo e(isset($option_settings['page_sidebar_setting_c']) && $option_settings['page_sidebar_setting_c'] == 'blog_sidebar' ? 'checked' : ''); ?>

                        name="page_sidebar_setting_c" id="blog_sidebar" value="blog_sidebar">
                    <?php echo e(translate('Blog Sidebar')); ?>

                </label>
            </div>
        </div>
    </div>
    

    
    <div class="form-group row py-4 border-bottom">
        <div class="col-xl-4">
            <label class="font-16 bold black"><?php echo e(translate('Title')); ?>

            </label>
            <span
                class="d-block"><?php echo e(translate('Switch enabled to display page title. Fot this option you will able to show / hide page title. Default setting Enabled')); ?></span>
        </div>
        <div class="col-xl-6 offset-xl-1">
            <label class="switch success">
                <input type="hidden" name="page_title_c" value="0">
                <input type="checkbox"
                    <?php echo e(isset($option_settings['page_title_c']) && $option_settings['page_title_c'] == 1 ? 'checked' : ''); ?>

                    name="page_title_c" id="page_title" value="1">
                <span class="control" id="page_title_switch">
                    <span class="switch-off"><?php echo e(translate('Disable')); ?></span>
                    <span class="switch-on"><?php echo e(translate('Enable')); ?></span>
                </span>
            </label>
        </div>
    </div>
    

    
    <div id="page_title_switch_on_field">
        
        <div class="form-group row py-4 border-bottom">
            <div class="col-xl-4">
                <label class="font-16 bold black"><?php echo e(translate('Title Tag')); ?>

                </label>
                <span
                    class="d-block"><?php echo e(translate('Select page title tag. If you use this option then you can able to change title tag H1 - H6 ( Default tag H1 )')); ?></span>
            </div>
            <div class="col-xl-6 offset-xl-1">
                <select name="page_title_tag_s" id="page_title_tag_s" class="form-control select">
                    <option value="h1"
                        <?php echo e(isset($option_settings['page_title_tag_s']) && $option_settings['page_title_tag_s'] == 'h1' ? 'selected' : ''); ?>>
                        H1</option>
                    <option value="h2"
                        <?php echo e(isset($option_settings['page_title_tag_s']) && $option_settings['page_title_tag_s'] == 'h2' ? 'selected' : ''); ?>>
                        H2</option>
                    <option value="h3"
                        <?php echo e(isset($option_settings['page_title_tag_s']) && $option_settings['page_title_tag_s'] == 'h3' ? 'selected' : ''); ?>>
                        H3</option>
                    <option value="h4"
                        <?php echo e(isset($option_settings['page_title_tag_s']) && $option_settings['page_title_tag_s'] == 'h4' ? 'selected' : ''); ?>>
                        H4</option>
                    <option value="h5"
                        <?php echo e(isset($option_settings['page_title_tag_s']) && $option_settings['page_title_tag_s'] == 'h5' ? 'selected' : ''); ?>>
                        H5</option>
                    <option value="h6"
                        <?php echo e(isset($option_settings['page_title_tag_s']) && $option_settings['page_title_tag_s'] == 'h6' ? 'selected' : ''); ?>>
                        H6</option>
                </select>
            </div>
        </div>
        

        
        <div class="form-group row py-4 border-bottom">
            <div class="col-xl-3">
                <label class="font-16 bold black"><?php echo e(translate('Font Settings')); ?>

                </label>
                <span
                    class="d-block"><?php echo e(translate('Select font setting for page title. If you use this options then you will able to change Font Weight, Text Align, Text Transform, Font Size, Line Height, Word Spacing, Letter Spacing.')); ?></span>
            </div>
            <div class="col-xl-8 offset-xl-1">
                <input type="hidden" name="page_title_typography_google_link_s"
                    id="page_title_typography_google_link_s"
                    value="<?php echo e(isset($option_settings['page_title_typography_google_link_s']) ? $option_settings['page_title_typography_google_link_s'] : ''); ?>">
                <input type="hidden" name="page_title_typography_css_i" id="page_title_typography_css"
                    value="<?php echo e(isset($option_settings['page_title_typography_css_i']) ? $option_settings['page_title_typography_css_i'] : ''); ?>">
                <input type="hidden" name="page_title_font_unit_i" value="px">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label><?php echo e(translate('Font Family')); ?></label>
                            <select name="page_title_font_font-family" class="form-control select font_family"
                                id="page_title_font_family" data-section="page_title">
                                <option value=""
                                    <?php echo e(isset($option_settings['page_title_font_font-family']) ? '' : 'selected'); ?>>
                                    <?php echo e(translate('Select  Fonts')); ?></option>
                                <optgroup label="<?php echo e(translate('Custom Fonts')); ?>">
                                    <option value="custom-font-1,sans-serif"
                                        <?php echo e(isset($option_settings['page_title_font_font-family']) && $option_settings['page_title_font_font-family'] == 'custom-font-1,sans-serif' ? 'selected' : ''); ?>

                                        data-subsets="" data-variations="">
                                        <?php echo e(translate('Custom Font 1')); ?></option>

                                    <option value="custom-font-2,sans-serif"
                                        <?php echo e(isset($option_settings['page_title_font_font-family']) && $option_settings['page_title_font_font-family'] == 'custom-font-2,sans-serif' ? 'selected' : ''); ?>

                                        data-subsets="" data-variations="">
                                        <?php echo e(translate('Custom Font 2')); ?></option>
                                </optgroup>
                                <optgroup label="<?php echo e(translate('Google Web Fonts')); ?>">
                                    <?php $__currentLoopData = $fonts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $font): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($font['family'] . ',sans-serif'); ?>"
                                            <?php echo e(isset($option_settings['page_title_font_font-family']) && $option_settings['page_title_font_font-family'] == $font['family'] . ',sans-serif' ? 'selected' : ''); ?>

                                            data-subsets="<?php echo e($font['subsets']); ?>"
                                            data-variations="<?php echo e($font['variants']); ?>">
                                            <?php echo e($font['family']); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label><?php echo e(translate('Font Weight & Style')); ?></label>
                            <input type="hidden" name="page_title_font_font-style" id="page_title_font_style"
                                value="<?php echo e(isset($option_settings['page_title_font_font-style']) ? $option_settings['page_title_font_font-style'] : ''); ?>">

                            <input type="hidden" name="page_title_font_font-weight" id="page_title_font_weight"
                                value="<?php echo e(isset($option_settings['page_title_font_font-weight']) ? $option_settings['page_title_font_font-weight'] : ''); ?>">

                            <select name="page_title_font_weight_style_i" class="form-control select"
                                id="page_title_font_weight_style_i"
                                data-value="<?php echo e(isset($option_settings['page_title_font_weight_style_i']) ? $option_settings['page_title_font_weight_style_i'] : null); ?>"
                                onchange="createUrl('page_title')">
                                <option value=""
                                    <?php echo e(isset($option_settings['page_title_font_weight_style_i']) ? '' : 'selected'); ?>>
                                    <?php echo e(translate('Select Weight & Style')); ?></option>
                                <option value="400"
                                    <?php echo e(isset($option_settings['page_title_font_weight_style_i']) && $option_settings['page_title_font_weight_style_i'] == '400' ? 'selected' : ''); ?>>
                                    Normal 400</option>
                                <option value="700"
                                    <?php echo e(isset($option_settings['page_title_font_weight_style_i']) && $option_settings['page_title_font_weight_style_i'] == '700' ? 'selected' : ''); ?>>
                                    Bold 700</option>
                                <option value="400italic"
                                    <?php echo e(isset($option_settings['page_title_font_weight_style_i']) && $option_settings['page_title_font_weight_style_i'] == '400italic' ? 'selected' : ''); ?>>
                                    Normal 400 Italic</option>
                                <option value="700italic"
                                    <?php echo e(isset($option_settings['page_title_font_weight_style_i']) && $option_settings['page_title_font_weight_style_i'] == '700italic' ? 'selected' : ''); ?>>
                                    Bold 700 Italic</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label><?php echo e(translate('Font Subsets')); ?></label>
                            <select name="page_title_font_font-subsets_i" class="form-control select"
                                id="page_title_font_subsets"
                                data-value="<?php echo e(isset($option_settings['page_title_font_font-subsets_i']) ? $option_settings['page_title_font_font-subsets_i'] : null); ?>"
                                onchange="createUrl('page_title')">
                                <option value=""
                                    <?php echo e(isset($option_settings['page_title_font_font-subsets_i']) ? '' : 'selected'); ?>>
                                    <?php echo e(translate('Select Font Subsets')); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label><?php echo e(translate('Text Align')); ?></label>
                            <select name="page_title_font_text-align" class="form-control select"
                                id="page_title_text_align" onchange="createFontCss('page_title')">
                                <option value="" disabled
                                    <?php echo e(isset($option_settings['page_title_font_text-align']) ? '' : 'selected'); ?>>
                                    <?php echo e(translate('Text Align')); ?></option>
                                <option value="inherit"
                                    <?php echo e(isset($option_settings['page_title_font_text-align']) && $option_settings['page_title_font_text-align'] == 'inherit' ? 'selected' : ''); ?>>
                                    Inherit</option>
                                <option value="left"
                                    <?php echo e(isset($option_settings['page_title_font_text-align']) && $option_settings['page_title_font_text-align'] == 'left' ? 'selected' : ''); ?>>
                                    Left</option>
                                <option value="right"
                                    <?php echo e(isset($option_settings['page_title_font_text-align']) && $option_settings['page_title_font_text-align'] == 'right' ? 'selected' : ''); ?>>
                                    Right</option>
                                <option value="center"
                                    <?php echo e(isset($option_settings['page_title_font_text-align']) && $option_settings['page_title_font_text-align'] == 'center' ? 'selected' : ''); ?>>
                                    Center</option>
                                <option value="justify"
                                    <?php echo e(isset($option_settings['page_title_font_text-align']) && $option_settings['page_title_font_text-align'] == 'justify' ? 'selected' : ''); ?>>
                                    Justify</option>
                                <option value="initial"
                                    <?php echo e(isset($option_settings['page_title_font_text-align']) && $option_settings['page_title_font_text-align'] == 'initial' ? 'selected' : ''); ?>>
                                    Initial</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label><?php echo e(translate('Text Transform')); ?></label>
                            <select name="page_title_font_text-transform" class="form-control select"
                                id="page_title_text_transform" onchange="createFontCss('page_title')">
                                <option value="" disabled
                                    <?php echo e(isset($option_settings['page_title_font_text-transform']) ? '' : 'selected'); ?>>
                                    <?php echo e(translate('Text Transform')); ?></option>
                                <option value="none"
                                    <?php echo e(isset($option_settings['page_title_font_text-transform']) && $option_settings['page_title_font_text-transform'] == 'none' ? 'selected' : ''); ?>>
                                    None</option>
                                <option value="capitalize"
                                    <?php echo e(isset($option_settings['page_title_font_text-transform']) && $option_settings['page_title_font_text-transform'] == 'capitalize' ? 'selected' : ''); ?>>
                                    Capitalize</option>
                                <option value="uppercase"
                                    <?php echo e(isset($option_settings['page_title_font_text-transform']) && $option_settings['page_title_font_text-transform'] == 'uppercase' ? 'selected' : ''); ?>>
                                    Uppercase</option>
                                <option value="lowercase"
                                    <?php echo e(isset($option_settings['page_title_font_text-transform']) && $option_settings['page_title_font_text-transform'] == 'lowercase' ? 'selected' : ''); ?>>
                                    Lowercase</option>
                                <option value="initial"
                                    <?php echo e(isset($option_settings['page_title_font_text-transform']) && $option_settings['page_title_font_text-transform'] == 'initial' ? 'selected' : ''); ?>>
                                    Initial</option>
                                <option value="inherit"
                                    <?php echo e(isset($option_settings['page_title_font_text-transform']) && $option_settings['page_title_font_text-transform'] == 'inherit' ? 'selected' : ''); ?>>
                                    Inherit</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-6 row">
                        <div class="col-xl-6">
                            <div class="form-group">
                                <label><?php echo e(translate('Font Size')); ?></label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="page_title_font_u_font-size"
                                        id="page_title_font_size" placeholder="<?php echo e(translate('Size')); ?>"
                                        value="<?php echo e(isset($option_settings['page_title_font_u_font-size']) ? $option_settings['page_title_font_u_font-size'] : ''); ?>"
                                        onkeyup="createFontCss('page_title')">
                                    <div class="input-group-append">
                                        <div class="input-group-text">px</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group">
                                <label><?php echo e(translate('Line Height')); ?></label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="page_title_font_u_line-height"
                                        id="page_title_line_height" placeholder="<?php echo e(translate('Height')); ?>"
                                        value="<?php echo e(isset($option_settings['page_title_font_u_line-height']) ? $option_settings['page_title_font_u_line-height'] : ''); ?>"
                                        onkeyup="createFontCss('page_title')">
                                    <div class="input-group-append">
                                        <div class="input-group-text">px</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 row">
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label><?php echo e(translate('Word Spacing')); ?></label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="page_title_font_u_word-spacing"
                                        id="page_title_word_spacing" placeholder="<?php echo e(translate('Word Spacing')); ?>"
                                        value="<?php echo e(isset($option_settings['page_title_font_u_word-spacing']) ? $option_settings['page_title_font_u_word-spacing'] : ''); ?>"
                                        onkeyup="createFontCss('page_title')">
                                    <div class="input-group-append">
                                        <div class="input-group-text">px</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="form-group">
                                <label><?php echo e(translate('Letter Spacing')); ?></label>
                                <div class="input-group">
                                    <input type="number" class="form-control"
                                        name="page_title_font_u_letter-spacing" id="page_title_letter_spacing"
                                        placeholder="<?php echo e(translate('Letter Spacing')); ?>"
                                        value="<?php echo e(isset($option_settings['page_title_font_u_letter-spacing']) ? $option_settings['page_title_font_u_letter-spacing'] : ''); ?>"
                                        onkeyup="createFontCss('page_title')">
                                    <div class="input-group-append">
                                        <div class="input-group-text">px</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <label for="page_title_font_color"><?php echo e(translate('Select Color')); ?></label>
                            <div class="color w-100">
                                <input type="text" class="form-control" name="page_title_font_color"
                                    value="<?php echo e(isset($option_settings['page_title_font_color']) ? $option_settings['page_title_font_color'] : ''); ?>">
                                <input type="color" class="" id="page_title_font_color"
                                    value="<?php echo e(isset($option_settings['page_title_font_color']) ? $option_settings['page_title_font_color'] : '#fafafa'); ?>"
                                    oninput="createFontCss('page_title')">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 border p-4 typography_preview" id="page_title_typography_preview">
                    <?php echo e(translate('The Quick Brown Fox Jumps Over The Lazy Dog')); ?>

                </div>
            </div>
        </div>
        
    </div>
    


    
    <div class="form-group row py-4 border-bottom">
        <div class="col-xl-3">
            <label class="font-16 bold black"><?php echo e(translate('Background')); ?>

            </label>
            <span
                class="d-block"><?php echo e(translate('Setting page header background. If you use this option then you will able to set Background Color, Background Image, Background Repeat, Background Size, Background Attachment, Background Position.')); ?></span>
        </div>
        <div class="col-xl-8 offset-xl-1">
            <div class="row">
                <div class="col-xl-12 my-2">
                    <div class="row ml-1">
                        <div class="color">
                            <input type="text" class="form-control" name="page_background-color"
                                value="<?php echo e(isset($option_settings['page_background-color']) ? $option_settings['page_background-color'] : ''); ?>">
                            <input type="color" class="" id="page_background-color"
                                value="<?php echo e(isset($option_settings['page_background-color']) ? $option_settings['page_background-color'] : '#fafafa'); ?>"
                                oninput="pageHeaderBackgroundCss('page')">
                            <label for="page_background-color"><?php echo e(translate('Select Color')); ?></label>
                        </div>
                        <div class="d-flex align-items-center">
                            <label class="custom-checkbox position-relative ml-2 mr-1">
                                <input type="hidden" name="page_background-color-transparent_i" value="0">
                                <input type="checkbox"
                                    <?php echo e(isset($option_settings['page_background-color-transparent_i']) && $option_settings['page_background-color-transparent_i'] == 1 ? 'checked' : ''); ?>

                                    name="page_background-color-transparent_i" id="page_background_color-transparent"
                                    value="1" onclick="pageHeaderBackgroundCss('page')">
                                <span class="checkmark"></span>
                            </label>
                            <label class="black font-16"
                                for="page_background_color-transparent"><?php echo e(translate('Transparent')); ?></label>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 my-2">
                    <label class="col-form-label col-form-label-sm"><?php echo e(translate('Background Repeat')); ?></label>
                    <select name="page_background-repeat" id="page_bg_repeat" class="form-control select"
                        onchange="pageHeaderBackgroundCss('page')">
                        <option value="" selected><?php echo e(translate('Select Background Repeat')); ?></option>
                        <option value="no-repeat"
                            <?php echo e(isset($option_settings['page_background-repeat']) && $option_settings['page_background-repeat'] == 'no-repeat' ? 'selected' : ''); ?>>
                            No Repeat</option>
                        <option value="repeat"
                            <?php echo e(isset($option_settings['page_background-repeat']) && $option_settings['page_background-repeat'] == 'repeat' ? 'selected' : ''); ?>>
                            Repeat All</option>
                        <option value="repeat-x"
                            <?php echo e(isset($option_settings['page_background-repeat']) && $option_settings['page_background-repeat'] == 'repeat-x' ? 'selected' : ''); ?>>
                            Repeat Horizontally</option>
                        <option value="repeat-y"
                            <?php echo e(isset($option_settings['page_background-repeat']) && $option_settings['page_background-repeat'] == 'repeat-y' ? 'selected' : ''); ?>>
                            Repeat Vertically</option>
                        <option value="inherit"
                            <?php echo e(isset($option_settings['page_background-repeat']) && $option_settings['page_background-repeat'] == 'inherit' ? 'selected' : ''); ?>>
                            Inherit</option>
                    </select>
                </div>
                <div class="col-xl-6 my-2">
                    <label class="col-form-label col-form-label-sm"><?php echo e(translate('Background Size')); ?></label>
                    <select name="page_background-size" id="page_bg_size" class="form-control select"
                        onchange="pageHeaderBackgroundCss('page')">
                        <option value="" selected><?php echo e(translate('Select Background Size')); ?></option>
                        <option value="inherit"
                            <?php echo e(isset($option_settings['page_background-size']) && $option_settings['page_background-size'] == 'inherit' ? 'selected' : ''); ?>>
                            Inherit</option>
                        <option value="cover"
                            <?php echo e(isset($option_settings['page_background-size']) && $option_settings['page_background-size'] == 'cover' ? 'selected' : ''); ?>>
                            Cover</option>
                        <option value="contain"
                            <?php echo e(isset($option_settings['page_background-size']) && $option_settings['page_background-size'] == 'contain' ? 'selected' : ''); ?>>
                            Contain</option>
                    </select>
                </div>
                <div class="col-xl-6 my-2">
                    <label class="col-form-label col-form-label-sm"><?php echo e(translate('Background Attachment')); ?></label>
                    <select name="page_background-attachment" id="page_bg_attachment" class="form-control select"
                        onchange="pageHeaderBackgroundCss('page')">
                        <option value="" selected><?php echo e(translate('Select Background Attachment')); ?></option>
                        <option value="fixed"
                            <?php echo e(isset($option_settings['page_background-attachment']) && $option_settings['page_background-attachment'] == 'fixed' ? 'selected' : ''); ?>>
                            Fixed</option>
                        <option value="scroll"
                            <?php echo e(isset($option_settings['page_background-attachment']) && $option_settings['page_background-attachment'] == 'scroll' ? 'selected' : ''); ?>>
                            Scroll</option>
                        <option value="inherit"
                            <?php echo e(isset($option_settings['page_background-attachment']) && $option_settings['page_background-attachment'] == 'inherit' ? 'selected' : ''); ?>>
                            Inherit</option>
                    </select>
                </div>
                <div class="col-xl-6 my-2">
                    <label class="col-form-label col-form-label-sm"
                        for="page_background-repeat"><?php echo e(translate('Background Position')); ?></label>
                    <select name="page_background-position" id="page_bg_position" class="form-control select"
                        onchange="pageHeaderBackgroundCss('page')">
                        <option value="" selected><?php echo e(translate('Select Background Position')); ?></option>
                        <option value="left top"
                            <?php echo e(isset($option_settings['page_background-position']) && $option_settings['page_background-position'] == 'left top' ? 'selected' : ''); ?>>
                            Left Top</option>
                        <option value="left center"
                            <?php echo e(isset($option_settings['page_background-position']) && $option_settings['page_background-position'] == 'left center' ? 'selected' : ''); ?>>
                            Left Center</option>
                        <option value="left bottom"
                            <?php echo e(isset($option_settings['page_background-position']) && $option_settings['page_background-position'] == 'left bottom' ? 'selected' : ''); ?>>
                            Left Bottom</option>
                        <option value="center top"
                            <?php echo e(isset($option_settings['page_background-position']) && $option_settings['page_background-position'] == 'center top' ? 'selected' : ''); ?>>
                            Center Top</option>
                        <option value="center center"
                            <?php echo e(isset($option_settings['page_background-position']) && $option_settings['page_background-position'] == 'center center' ? 'selected' : ''); ?>>
                            Center Center</option>
                        <option value="center bottom"
                            <?php echo e(isset($option_settings['page_background-position']) && $option_settings['page_background-position'] == 'center bottom' ? 'selected' : ''); ?>>
                            Center Bottom</option>
                        <option value="right top"
                            <?php echo e(isset($option_settings['page_background-position']) && $option_settings['page_background-position'] == 'right top' ? 'selected' : ''); ?>>
                            Right Top</option>
                        <option value="right center"
                            <?php echo e(isset($option_settings['page_background-position']) && $option_settings['page_background-position'] == 'right center' ? 'selected' : ''); ?>>
                            Right Center</option>
                        <option value="right bottom"
                            <?php echo e(isset($option_settings['page_background-position']) && $option_settings['page_background-position'] == 'right bottom' ? 'selected' : ''); ?>>
                            Right Bottom</option>
                    </select>
                </div>
                <div class="col-xl-6 my-2">
                    <input type="hidden" name="page_background-image" id="page_background-image" value>
                    <?php echo $__env->make('core::base.includes.media.media_input', [
                        'input' => 'page_background_image_i',
                        'data' => isset($option_settings['page_background_image_i'])
                            ? $option_settings['page_background_image_i']
                            : null,
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <div class="mt-4 page_background_preview" id="page_background_preview">
            </div>
        </div>
    </div>
    

    
    <div class="form-group row py-4 border-bottom">
        <div class="col-xl-4">
            <label class="font-16 bold black"><?php echo e(translate('Overlay')); ?>

            </label>
            <span
                class="d-block"><?php echo e(translate('Check this check box to use overlay. If you use this option then you will able to use background overlay.')); ?></span>
        </div>
        <div class="col-xl-6 offset-xl-1 row align-items-center">
            <label class="custom-checkbox solid position-relative">
                <input type="hidden" name="overlay_c" value="0">
                <input type="checkbox"
                    <?php echo e(isset($option_settings['overlay_c']) && $option_settings['overlay_c'] == 1 ? 'checked' : ''); ?>

                    name="overlay_c" id="overlay" value="1">
                <span class="checkmark" id="overlay_checkbox"></span>
            </label>
        </div>
    </div>
    

    
    <div id="overlay_checkbox_check_field">
        
        <div class="form-group row py-4 border-bottom">
            <div class="col-xl-4">
                <label class="font-16 bold black"><?php echo e(translate('Overlay Background')); ?>

                </label>
                <span
                    class="d-block"><?php echo e(translate('Choose overlay background color. If you user this option then you will able to choose overlay background color.')); ?></span>
            </div>
            <div class="col-xl-6 offset-xl-1">
                <div class="row ml-2">
                    <div class="color">
                        <input type="text" class="form-control" name="overlay_background-color"
                            value="<?php echo e(isset($option_settings['overlay_background-color']) ? $option_settings['overlay_background-color'] : ''); ?>">
                        <input type="color" class="" id="overlay_background_color"
                            value="<?php echo e(isset($option_settings['overlay_background-color']) ? $option_settings['overlay_background-color'] : '#fafafa'); ?>">
                        <label for="overlay_background_color"><?php echo e(translate('Select Color')); ?></label>
                    </div>
                    <div class="d-flex align-items-center">
                        <label class="custom-checkbox position-relative ml-2 mr-1">
                            <input type="hidden" name="overlay_background-color-transparent_i" value="0">
                            <input type="checkbox"
                                <?php echo e(isset($option_settings['overlay_background-color-transparent_i']) && $option_settings['overlay_background-color-transparent_i'] == 1 ? 'checked' : ''); ?>

                                name="overlay_background-color-transparent_i"
                                id="overlay_background-color-transparent" value="1">
                            <span class="checkmark"></span>
                        </label>
                        <label class="black font-16"
                            for="overlay_background-color-transparent"><?php echo e(translate('Transparent')); ?></label>
                    </div>
                </div>
            </div>
        </div>
        

        
        <div class="form-group row py-4 border-bottom">
            <div class="col-xl-4">
                <label class="font-16 bold black"><?php echo e(translate('Opacity')); ?>

                </label>
                <span
                    class="d-block"><?php echo e(translate('Setting overlay opacity. If you use this option then you will able to show light to dark overlay background color ( Default opacity 0.5 ).')); ?></span>
            </div>
            <div class="col-xl-6 offset-xl-1 row align-items-center">
                <input type="number" step="any" class="form-control col-xl-3" name="overlay_opacity"
                    id="overlay_opacity"
                    value="<?php echo e(isset($option_settings['overlay_opacity']) ? $option_settings['overlay_opacity'] : ''); ?>">

                <input type="range" class="col-xl-8" id="overlay_opacity_range" style="height: 30%;"
                    min="0" max="1" step="0.1"
                    value="<?php echo e(isset($option_settings['overlay_opacity']) ? $option_settings['overlay_opacity'] : '0.5'); ?>">
            </div>
        </div>
        
    </div>
    

    
    <div class="form-group row py-4 border-bottom">
        <div class="col-xl-4">
            <label class="font-16 bold black"><?php echo e(translate('Breadcrumb Hide/Show')); ?>

            </label>
            <span
                class="d-block"><?php echo e(translate('Hide / Show breadcrumb from all pages and posts ( Default settings show ).')); ?></span>
        </div>
        <div class="col-xl-6 offset-xl-1">
            <label class="switch success">
                <input type="hidden" name="breadcrumb_hide_show_c" value="0">
                <input type="checkbox"
                    <?php echo e(isset($option_settings['breadcrumb_hide_show_c']) && $option_settings['breadcrumb_hide_show_c'] == 1 ? 'checked' : ''); ?>

                    name="breadcrumb_hide_show_c" id="breadcrumb_hide_show" value="1">
                <span class="control" id="breadcrumb_hide_show_switch">
                    <span class="switch-off"><?php echo e(translate('Hide')); ?></span>
                    <span class="switch-on"><?php echo e(translate('Show')); ?></span>
                </span>
            </label>
        </div>
    </div>
    

    
    <div id="breadcrumb_hide_show_switch_on_field">
        
        <div class="form-group row py-4 border-bottom">
            <div class="col-xl-4">
                <label class="font-16 bold black"><?php echo e(translate('Breadcrumb Color')); ?>

                </label>
                <span
                    class="d-block"><?php echo e(translate('Choose page header breadcrumb text color here.If you user this option then you will able to set page breadcrumb color.')); ?></span>
            </div>
            <div class="col-xl-6 offset-xl-1">
                <div class="row ml-2">
                    <div class="color">
                        <input type="text" class="form-control" name="breadcrumb_color"
                            value="<?php echo e(isset($option_settings['breadcrumb_color']) ? $option_settings['breadcrumb_color'] : ''); ?>">

                        <input type="color" class="" id="breadcrumb_color"
                            value="<?php echo e(isset($option_settings['breadcrumb_color']) ? $option_settings['breadcrumb_color'] : '#fafafa'); ?>">
                        <label for="breadcrumb_color"><?php echo e(translate('Select Color')); ?></label>
                    </div>
                    <div class="d-flex align-items-center">
                        <label class="custom-checkbox position-relative ml-2 mr-1">
                            <input type="hidden" name="breadcrumb_color-transparent_i" value="0">
                            <input type="checkbox"
                                <?php echo e(isset($option_settings['breadcrumb_color-transparent_i']) && $option_settings['breadcrumb_color-transparent_i'] == 1 ? 'checked' : ''); ?>

                                name="breadcrumb_color-transparent_i" id="breadcrumb_color-transparent"
                                value="1">
                            <span class="checkmark"></span>
                        </label>
                        <label class="black font-16"
                            for="breadcrumb_color-transparent"><?php echo e(translate('Transparent')); ?></label>
                    </div>
                </div>
            </div>
        </div>
        

        
        <div class="form-group row py-4 border-bottom">
            <div class="col-xl-4">
                <label class="font-16 bold black"><?php echo e(translate('Breadcrumb Active Color')); ?>

                </label>
                <span
                    class="d-block"><?php echo e(translate('Choose page header breadcrumb text active color here.If you user this option then you will able to set page breadcrumb active color.')); ?></span>
            </div>
            <div class="col-xl-6 offset-xl-1">
                <div class="row ml-2">
                    <div class="color">
                        <input type="text" class="form-control" name="breadcrumb_activer_color"
                            value="<?php echo e(isset($option_settings['breadcrumb_activer_color']) ? $option_settings['breadcrumb_activer_color'] : ''); ?>">
                        <input type="color" class="" id="breadcrumb_activer_color"
                            value="<?php echo e(isset($option_settings['breadcrumb_activer_color']) ? $option_settings['breadcrumb_activer_color'] : '#fafafa'); ?>">
                        <label for="breadcrumb_activer_color"><?php echo e(translate('Select Color')); ?></label>
                    </div>
                    <div class="d-flex align-items-center">
                        <label class="custom-checkbox position-relative ml-2 mr-1">
                            <input type="hidden" name="breadcrumb_activer_color-transparent_i" value="0">
                            <input type="checkbox"
                                <?php echo e(isset($option_settings['breadcrumb_activer_color-transparent_i']) && $option_settings['breadcrumb_activer_color-transparent_i'] == 1 ? 'checked' : ''); ?>

                                name="breadcrumb_activer_color-transparent_i"
                                id="breadcrumb_activer_color-transparent" value="1">
                            <span class="checkmark"></span>
                        </label>
                        <label class="black font-16"
                            for="breadcrumb_activer_color-transparent"><?php echo e(translate('Transparent')); ?></label>
                    </div>
                </div>
            </div>
        </div>
        

        
        <div class="form-group row py-4 border-bottom">
            <div class="col-xl-4">
                <label class="font-16 bold black"><?php echo e(translate('Breadcrumb Divider Color')); ?>

                </label>
                <span
                    class="d-block"><?php echo e(translate('Choose breadcrumb divider color. If you use this option then you will able to use breadcrumb color ( Default color  )')); ?></span>
            </div>
            <div class="col-xl-6 offset-xl-1">
                <div class="row ml-2">
                    <div class="color">
                        <input type="text" class="form-control" name="breadcrumb_divider_background-color"
                            value="<?php echo e(isset($option_settings['breadcrumb_divider_background-color']) ? $option_settings['breadcrumb_divider_background-color'] : ''); ?>">

                        <input type="color" class="" id="breadcrumb_divider_background-color"
                            value="<?php echo e(isset($option_settings['breadcrumb_divider_background-color']) ? $option_settings['breadcrumb_divider_background-color'] : '#fafafa'); ?>">

                        <label for="breadcrumb_divider_background-color"><?php echo e(translate('Select Color')); ?></label>
                    </div>
                    <div class="d-flex align-items-center">
                        <label class="custom-checkbox position-relative ml-2 mr-1">
                            <input type="hidden" name="breadcrumb_divider_background-color-transparent_i"
                                value="0">
                            <input type="checkbox"
                                <?php echo e(isset($option_settings['breadcrumb_divider_background-color-transparent_i']) && $option_settings['breadcrumb_divider_background-color-transparent_i'] == 1 ? 'checked' : ''); ?>

                                name="breadcrumb_divider_background-color-transparent_i"
                                id="breadcrumb_divider_background_color-transparent" value="1">
                            <span class="checkmark"></span>
                        </label>
                        <label class="black font-16"
                            for="breadcrumb_divider_background_color-transparent"><?php echo e(translate('Transparent')); ?></label>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</div>

<?php /**PATH /home/u768514428/domains/tayf.ae/public_html/themes/default/resources/views/backend/theme/option-form/page.blade.php ENDPATH**/ ?>