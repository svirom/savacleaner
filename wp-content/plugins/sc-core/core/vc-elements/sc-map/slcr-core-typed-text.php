<?php
/** 
 * The SlashCreative VC Element 
 *
 * @author     SlashCreative
 * @copyright  (c) Copyright by SlashCreative
 * @link       http://slashcreative.co
 * @package    SC-CORE
 * @subpackage Core
 * @since      1.1.0
 *
 * Element Description: Slcr Typed Text Data Mapping
 */
if ( ! defined( 'ABSPATH' ) ) {
    die( '-1' );
}
// Map the block with vc_map()
return array(
    'name' => esc_html__('Typed Text','sc-core') ,
    'base' => 'slcr_typed_text',
    'show_settings_on_create' => true,
    // 'is_container' => true,
    'description' => esc_html__('Live changing text with typing effect.','sc-core') ,
    'category' => esc_html__('SC Elements','sc-core') ,
    'icon' => SLCR_CORE_VC_ELEMENT_ICON_URI . 'typed-text.png',
    'params' => array(
        array(
            'type' => 'textfield',
            'holder' => '',
            'class' => 'count-class',
            'heading' => esc_html__('Enter Static Text','sc-core') ,
            'description' => esc_html__('Enter the text you want show static.','sc-core') ,
            'param_name' => 'typed_text_front_text',
            'value' => '' ,
            'admin_label' => false,
            'weight' => 0,
            'group' => esc_html__('General','sc-core'),
        ) ,
        array(
            'type' => 'textfield',
            'holder' => 'Font Size',
            'class' => 'title-class',
            'heading' => esc_html__('Static Text Size','sc-core') ,
            'description' => esc_html__('Enter custom font size for static text. Example - 20px','sc-core') ,
            'param_name' => 'front_text_font_size',
            'value' => '' ,
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'admin_label' => false,
            'weight' => 0,
            'group' => esc_html__('Typography','sc-core'),
            'dependency' => array(
                'element' => 'typed_text_front_text',
                'not_empty' => true,
            ) ,
        ) ,
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Static Text Transform ','sc-core') ,
            'param_name' => 'front_text_text_transform',
            'class' => 'Title_Text_Transform',
            'description' => esc_html__('Transform static text. Example - UPPERCASE, lowercase','sc-core') ,
            'group' => esc_html__('Typography','sc-core'),
            'admin_label' => false,
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc padding-custom',
            'value' => array(
                esc_html__('Default ','sc-core') => 'Default',
                esc_html__('Uppercase ','sc-core') => 'uppercase',
                esc_html__('Lowercase ','sc-core') => 'lowercase',
            ) ,
            'save_always' => true,
            'dependency' => array(
                'element' => 'typed_text_front_text',
                'not_empty' => true,
            ) ,
        ) ,
        array(
            'type' => 'textfield',
            'holder' => 'Font Padding  ',
            'class' => 'title-class',
            'heading' => esc_html__('Padding Top and Bottom','sc-core') ,
            'description' => esc_html__('Enter custom Top and Bottom padding around static text. Example 10px','sc-core') ,
            'param_name' => 'front_text_padding_top',
            'value' => '' ,
            'admin_label' => false,
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'weight' => 0,
            'group' => esc_html__('Typography','sc-core'),
            'dependency' => array(
                'element' => 'typed_text_front_text',
                'not_empty' => true,
            ) ,
        ) ,
        array(
            'type' => 'textfield',
            'holder' => 'Font Padding  ',
            'class' => 'title-class',
            'heading' => esc_html__('Padding Left and Right','sc-core') ,
            'description' => esc_html__('Enter custom Left and Right padding around static text. Example - 10px','sc-core') ,
            'param_name' => 'front_text_padding_left',
            'value' => '' ,
            'admin_label' => false,
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'weight' => 0,
            'group' => esc_html__('Typography','sc-core'),
            'dependency' => array(
                'element' => 'typed_text_front_text',
                'not_empty' => true,
            ) ,
        ) ,
        array(
            'type' => 'colorpicker',
            'class' => 'title-class',
            'heading' => esc_html__('Static Text Color','sc-core') ,
            'param_name' => 'front_text_font_color',
            'description' => esc_html__('Change color of static text.','sc-core') ,
            'group' => esc_html__('Typography','sc-core'),
            'admin_label' => false,
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'dependency' => array(
                'element' => 'typed_text_front_text',
                'not_empty' => true,
            ) ,
        ) ,
        array(
            'type' => 'checkbox',
            'class' => 'custom_heading_element_use_theme_fonts',
            'heading' => esc_html__('Use custom Google font ?','sc-core') ,
            'param_name' => 'front_text_use_theme_fonts',
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'value' => array(
                'Yes' => 'Yes',
            ) ,
            'description' => esc_html__('Leave this if you want to use default theme font.','sc-core') ,
            'admin_label' => false,
            'weight' => 0,
            'group' => esc_html__('Typography','sc-core'),
            'dependency' => array(
                'element' => 'typed_text_front_text',
                'not_empty' => true,
            ) ,
        ) ,
        array(
            'type' => 'google_fonts',
            'class' => 'title-class',
            'heading' => esc_html__('Change Front text Typography','sc-core') ,
            'param_name' => 'front_text_google_font_select',
            'settings' => array(
                'fields' => array(
                    'font_family_description' => esc_html__('Select Font Family.','sc-core') ,
                    'font_style_description' => esc_html__('Select Font Style.','sc-core') ,
                ) ,
            ) ,
            'description' => esc_html__('Select Google Font from the list.','sc-core') ,
            'group' => esc_html__('Typography','sc-core'),
            'admin_label' => false,
            'dependency' => array(
                'element' => 'front_text_use_theme_fonts',
                'value' => 'Yes',
            ) ,
        ) ,
        array(
            'type' => 'textarea_raw_html',
            'class' => '',
            'heading' => esc_html__('Typed Text','sc-core') ,
            'param_name' => 'back_content',
            'value' => '',
            'description' => __('Enter the typed text strings using opening and closing span tags one per line.','sc-core').'<br />'.__('Example - ','sc-core').'<br /><pre style="display: inline-block"><</pre class="c-pre">span<pre class="c-pre">></pre class="c-pre"> '.__('Typed Text 1','sc-core').' <pre class="c-pre"><</pre class="c-pre">/span<pre class="c-pre">></pre class="c-pre">
            <br />
            <pre class="c-pre"><</pre class="c-pre">span<pre class="c-pre">></pre class="c-pre"> '.__('Typed Text 2 ','sc-core').'<pre class="c-pre"><</pre class="c-pre">/span<pre class="c-pre">></pre class="c-pre">',
            'group' => esc_html__('General','sc-core') ,
            'admin_label' => false,
        ) ,
        array(
            'type' => 'textfield',
            'holder' => 'Font Size',
            'class' => 'title-class',
            'heading' => esc_html__('Typed Text Size','sc-core') ,
            'description' => esc_html__('Change font size of typed text. Example - 20px','sc-core') ,
            'param_name' => 'back_text_font_size',
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'value' => '' ,
            'admin_label' => false,
            'weight' => 0,
            'group' => esc_html__('Typography','sc-core'),
            'dependency' => array(
                'element' => 'back_content',
                'not_empty' => true,
            ) ,
        ) ,
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Typed Text Transform ','sc-core') ,
            'param_name' => 'back_text_text_transform',
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'class' => 'Title_Text_Transform',
            'description' => esc_html__('Transform typed text.','sc-core') ,
            'group' => esc_html__('Typography','sc-core'),
            'value' => array(
                esc_html__('Default ','sc-core') => 'Default',
                esc_html__('Uppercase ','sc-core') => 'uppercase',
                esc_html__('Lowercase ','sc-core') => 'lowercase',
            ) ,
            'save_always' => true,
            'admin_label' => false,
            'dependency' => array(
                'element' => 'back_content',
                'not_empty' => true,
            ) ,
        ) ,
        array(
            'type' => 'textfield',
            'holder' => 'Font Padding  ',
            'class' => 'title-class',
            'heading' => esc_html__('Padding Top and Bottom','sc-core') ,
            'description' => esc_html__('Enter custom Top and Bottom padding around typed text. Example - 20px','sc-core') ,
            'param_name' => 'back_text_padding_top',
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'value' => '' ,
            'admin_label' => false,
            'weight' => 0,
            'group' => esc_html__('Typography','sc-core'),
            'dependency' => array(
                'element' => 'back_content',
                'not_empty' => true,
            ) ,
        ) ,
        array(
            'type' => 'textfield',
            'holder' => 'Font Padding  ',
            'class' => 'title-class',
            'heading' => esc_html__('Padding Left and Right','sc-core') ,
            'description' => esc_html__('Enter custom Left and Right padding around typed text. Example - 20px','sc-core') ,
            'param_name' => 'back_text_padding_left',
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'value' => '' ,
            'admin_label' => false,
            'weight' => 0,
            'group' => esc_html__('Typography','sc-core'),
            'dependency' => array(
                'element' => 'back_content',
                'not_empty' => true,
            ) ,
        ) ,
        array(
            'type' => 'colorpicker',
            'class' => 'title-class',
            'heading' => esc_html__('Typed Text Color','sc-core') ,
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'param_name' => 'back_text_font_color',
            'description' => esc_html__('Change text color of typed text.','sc-core') ,
            'group' => esc_html__('Typography','sc-core'),
            'admin_label' => false,
            'dependency' => array(
                'element' => 'back_content',
                'not_empty' => true,
            ) ,
        ) ,
        array(
            'type' => 'checkbox',
            'class' => 'custom_heading_element_use_theme_fonts',
            'heading' => esc_html__('Use custom Google font ?','sc-core') ,
            'param_name' => 'back_text_use_theme_fonts',
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'value' => array(
                'Yes' => 'Yes',
            ) ,
            'description' => esc_html__('Leave this if you want to use default theme font.','sc-core') ,
            'admin_label' => false,
            'weight' => 0,
            'group' => esc_html__('Typography','sc-core'),
            'dependency' => array(
                'element' => 'back_content',
                'not_empty' => true,
            ) ,
        ) ,
        array(
            'type' => 'google_fonts',
            'class' => 'title-class',
            'heading' => esc_html__('Change back text Typography','sc-core') ,
            'param_name' => 'back_text_google_font_select',
            'settings' => array(
                'fields' => array(
                    'font_family_description' => esc_html__('Select Font Family.','sc-core') ,
                    'font_style_description' => esc_html__('Select Font Style.','sc-core') ,
                ) ,
            ) ,
            'description' => esc_html__('Select Google Font from the list.','sc-core') ,
            'group' => esc_html__('Typography','sc-core'),
            'admin_label' => false,
            'dependency' => array(
                'element' => 'back_text_use_theme_fonts',
                'value' => 'Yes',
            ) ,
        ) ,
        array(
            'type' => 'textfield',
            'holder' => 'speed',
            'class' => 'count-class',
            'heading' => esc_html__('Typed Text speed','sc-core') ,
            'description' => esc_html__('Enter the speed of typing text. Example - 20','sc-core') ,
            'param_name' => 'typed_text_speed',
            'value' => '' ,
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'admin_label' => false,
            'weight' => 0,
            'group' => esc_html__('General','sc-core'),
        ) ,
        array(
            'type' => 'textfield',
            'holder' => 'speed',
            'class' => 'count-class',
            'heading' => esc_html__('Erasing Speed','sc-core') ,
            'description' => esc_html__('Enter the speed for erasing the tex. Example - 20','sc-core') ,
            'param_name' => 'typed_text_back_speed', 
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'admin_label' => false,
            'weight' => 0,
            'group' => esc_html__('General','sc-core'),
        ) ,
        array(
            'type' => 'checkbox',
            'class' => ' ',
            'heading' => esc_html__('Enable Loop','sc-core') ,
            'param_name' => 'typed_text_loop',
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'value' => array(
                'Yes' => 'Yes',
            ) ,
            'description' => esc_html__('Enable this option to run typed text multiple times in a loop.','sc-core') ,
            'admin_label' => false,
            'weight' => 0,
            'group' => esc_html__('General','sc-core'),
        ) ,
        array(
            'type' => 'textfield',
            'holder' => '',
            'class' => 'count-class',
            'heading' => esc_html__('Loop Count','sc-core'),
            'description' => esc_html__('Enter the number of timed you want to run the loop. Example - 20, 50 or 100','sc-core') ,
            'param_name' => 'typed_text_loop_count',
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'value' => '' ,
            'admin_label' => false,
            'weight' => 0,
            'group' => esc_html__('General','sc-core'),
        ) ,
        array(
            'type' => 'textfield',
            'holder' => '',
            'class' => 'count-class',
            'heading' => esc_html__('Start Delay','sc-core') ,
            'description' => esc_html__('Add a delay to start animation for first time. Example - 1000 "for 1 second"','sc-core') ,
            'param_name' => 'typed_text_start_delay',
            'edit_field_class' => 'vc_column vc_col-sm-4 crum_vc',
            'value' => '' ,
            'admin_label' => false,
            'weight' => 0,
            'group' => esc_html__('General','sc-core'),
        ) ,
        array(
            'type' => 'checkbox',
            'class' => ' ',
            'heading' => esc_html__('Show Cursor','sc-core') ,
            'param_name' => 'typed_text_cursor',
            'value' => array(
                'Yes' => 'Yes',
            ) ,
            'description' => esc_html__('Check this option to show a blinking cursor after strings.','sc-core') ,
            'admin_label' => false,
            'edit_field_class' => 'vc_column vc_col-sm-4 crum_vc',
            'weight' => 0,
            'group' => esc_html__('General','sc-core'),
        ) ,
        array(
            'type' => 'checkbox',
            'class' => ' ',
            'heading' => esc_html__('Fade Erasing','sc-core') ,
            'param_name' => 'typed_text_fade_effect',
            'value' => array(
                'Yes' => 'Yes',
            ) ,
            'description' => esc_html__('Check this option to erase text with fading effect.','sc-core') ,
            'edit_field_class' => 'vc_column vc_col-sm-4 crum_vc',
            'admin_label' => false,
            'weight' => 0,
            'group' => esc_html__('General','sc-core'),
        ) ,
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Font Weights For Static Text','sc-core') ,
            'param_name' => 'typed_text_font_weights_static_text_slcr',
            'class' => 'title-class',
            'admin_label' => false,
            'value' => array(
                esc_html__('font-400','sc-core') => 'font-400',
                esc_html__('font-100','sc-core') => 'font-100',
                esc_html__('font-300','sc-core') => 'font-300',
                esc_html__('font-500','sc-core') => 'font-500',
                esc_html__('font-600','sc-core') => 'font-600',
                esc_html__('font-700','sc-core') => 'font-700',
                esc_html__('font-800','sc-core') => 'font-800',
                esc_html__('font-900','sc-core') => 'font-900',
            ) ,
            'save_always' => true,
            'description' => esc_html__('Select Font Weights For Static Text','sc-core') , 
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'group' => esc_html__('General','sc-core'),
        ) , 
        array(
            'type' => 'dropdown',
            'heading' => esc_html__('Font Weights For Typed Text','sc-core') ,
            'param_name' => 'typed_text_font_weights_typed_text_slcr',
            'class' => 'title-class',
            'admin_label' => false,
            'value' => array(
                esc_html__('font-400','sc-core') => 'font-400',
                esc_html__('font-100','sc-core') => 'font-100',
                esc_html__('font-300','sc-core') => 'font-300',
                esc_html__('font-500','sc-core') => 'font-500',
                esc_html__('font-600','sc-core') => 'font-600',
                esc_html__('font-700','sc-core') => 'font-700',
                esc_html__('font-800','sc-core') => 'font-800',
                esc_html__('font-900','sc-core') => 'font-900',
            ) ,
            'save_always' => true,
            'description' => esc_html__('Select Font Weights For Typed Text','sc-core') , 
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'group' => esc_html__('General','sc-core'),
        ) ,
        array(
            'type' => 'textfield',
            'holder' => 'Font Size',
            'class' => 'title-class',
            'heading' => esc_html__('Static Text Size On Mobile','sc-core') ,
            'description' => esc_html__('Enter custom font size for static text On Mobile. Example - 20px','sc-core') ,
            'param_name' => 'front_text_font_size_mobile',
            'value' => '' ,
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'admin_label' => false,
            'weight' => 0,
            'group' => esc_html__('Typography','sc-core'),
            'dependency' => array(
                'element' => 'typed_text_front_text',
                'not_empty' => true,
            ) ,
        ) ,
        array(
            'type' => 'textfield',
            'holder' => 'Font Size',
            'class' => 'title-class',
            'heading' => esc_html__('Typed Text Size On Mobile','sc-core') ,
            'description' => esc_html__('Change font size of typed text On Mobile. Example - 20px','sc-core') ,
            'param_name' => 'back_text_font_size_mobile',
            'edit_field_class' => 'vc_column vc_col-sm-6 crum_vc',
            'value' => '' ,
            'admin_label' => false,
            'weight' => 0,
            'group' => esc_html__('Typography','sc-core'),
            'dependency' => array(
                'element' => 'back_content',
                'not_empty' => true,
            ) ,
        ) ,
        array(
            'type' => 'el_id',
            'heading' => esc_html__('Element ID','sc-core') ,
            'param_name' => 'el_id',
            'description' => sprintf(__('Enter element ID (Note: make sure it is unique and valid according to ','sc-core').'<a href="%s" target="_blank">'.__('w3c specification','sc-core').'</a>).' , 'http://www.w3schools.com/tags/att_global_id.asp') ,
            'admin_label' => false,
            'group' => esc_html__('General','sc-core'),
        ) ,
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Extra class name','sc-core') ,
            'param_name' => 'el_class',
            'description' => esc_html__('Style particular content element differently - add a class name and refer to it in custom CSS.','sc-core') ,
            'admin_label' => false,
            'group' => esc_html__('General','sc-core'),
        ) ,
        array(
            'type' => 'css_editor',
            'heading' => esc_html__('CSS box','sc-core') ,
            'param_name' => 'css',
            'admin_label' => false,
            'group' => esc_html__('Design Options','sc-core') ,
        ) ,
    ) ,
);