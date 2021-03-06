<?php
/**
 * Customize Styles  ( cs )
 * 
 * @package Admin
 * @since 2.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'HT_CTC_Admin_Customize_Styles' ) ) :

class HT_CTC_Admin_Customize_Styles {

    public function menu() {

        add_submenu_page(
            'click-to-chat',
            'Customize',
            'Customize',
            'manage_options',
            'click-to-chat-customize-styles',
            array( $this, 'settings_page' )
        );
    }

    public function settings_page() {

        if ( ! current_user_can('manage_options') ) {
            return;
        }

        ?>

        <div class="wrap">

            <?php settings_errors(); ?>

            <div class="row">
                <div class="col s12 m12 xl8 options">
                    <form action="options.php" method="post" class="">
                        <?php settings_fields( 'ht_ctc_cs_page_settings_fields' ); ?>
                        <?php do_settings_sections( 'ht_ctc_cs_page_settings_sections_do' ) ?>
                        <?php submit_button() ?>
                    </form>
                </div>
                <!-- <div class="col s12 m12 xl6 ht-cc-admin-sidebar">
                </div> -->
            </div>

        </div>

        <?php

    }


    
    public function settings() {

        register_setting( 'ht_ctc_cs_page_settings_fields', 'ht_ctc_s1' , array( $this, 'options_sanitize' ) );
        register_setting( 'ht_ctc_cs_page_settings_fields', 'ht_ctc_s2' , array( $this, 'options_sanitize' ) );
        register_setting( 'ht_ctc_cs_page_settings_fields', 'ht_ctc_s3' , array( $this, 'options_sanitize' ) );
        register_setting( 'ht_ctc_cs_page_settings_fields', 'ht_ctc_s4' , array( $this, 'options_sanitize' ) );
        register_setting( 'ht_ctc_cs_page_settings_fields', 'ht_ctc_s5' , array( $this, 'options_sanitize' ) );
        register_setting( 'ht_ctc_cs_page_settings_fields', 'ht_ctc_s6' , array( $this, 'options_sanitize' ) );
        register_setting( 'ht_ctc_cs_page_settings_fields', 'ht_ctc_s7' , array( $this, 'options_sanitize' ) );
        register_setting( 'ht_ctc_cs_page_settings_fields', 'ht_ctc_s8' , array( $this, 'options_sanitize' ) );
        register_setting( 'ht_ctc_cs_page_settings_fields', 'ht_ctc_s99' , array( $this, 'options_sanitize' ) );
        register_setting( 'ht_ctc_cs_page_settings_fields', 'ht_ctc_othersettings' , array( $this, 'options_sanitize' ) );
        
        add_settings_section( 'ht_ctc_cs_settings_sections_add', '', array( $this, 'main_settings_section_cb' ), 'ht_ctc_cs_page_settings_sections_do' );
        
        add_settings_field( 'ht_ctc_s1', 'Style-1', array( $this, 'ht_ctc_s1_cb' ), 'ht_ctc_cs_page_settings_sections_do', 'ht_ctc_cs_settings_sections_add' );
        add_settings_field( 'ht_ctc_s2', 'Style-2', array( $this, 'ht_ctc_s2_cb' ), 'ht_ctc_cs_page_settings_sections_do', 'ht_ctc_cs_settings_sections_add' );
        add_settings_field( 'ht_ctc_s3', 'Style-3', array( $this, 'ht_ctc_s3_cb' ), 'ht_ctc_cs_page_settings_sections_do', 'ht_ctc_cs_settings_sections_add' );
        add_settings_field( 'ht_ctc_s4', 'Style-4', array( $this, 'ht_ctc_s4_cb' ), 'ht_ctc_cs_page_settings_sections_do', 'ht_ctc_cs_settings_sections_add' );
        add_settings_field( 'ht_ctc_s5', 'Style-5', array( $this, 'ht_ctc_s5_cb' ), 'ht_ctc_cs_page_settings_sections_do', 'ht_ctc_cs_settings_sections_add' );
        add_settings_field( 'ht_ctc_s6', 'Style-6', array( $this, 'ht_ctc_s6_cb' ), 'ht_ctc_cs_page_settings_sections_do', 'ht_ctc_cs_settings_sections_add' );
        add_settings_field( 'ht_ctc_s7', 'Style-7', array( $this, 'ht_ctc_s7_cb' ), 'ht_ctc_cs_page_settings_sections_do', 'ht_ctc_cs_settings_sections_add' );
        add_settings_field( 'ht_ctc_s8', 'Style-8', array( $this, 'ht_ctc_s8_cb' ), 'ht_ctc_cs_page_settings_sections_do', 'ht_ctc_cs_settings_sections_add' );
        add_settings_field( 'ht_ctc_s99', 'Style-99', array( $this, 'ht_ctc_s99_cb' ), 'ht_ctc_cs_page_settings_sections_do', 'ht_ctc_cs_settings_sections_add' );
        add_settings_field( 'ht_ctc_othersettings', 'Other settings', array( $this, 'ht_ctc_othersettings_cb' ), 'ht_ctc_cs_page_settings_sections_do', 'ht_ctc_cs_settings_sections_add' );
        
        
    }

    public function main_settings_section_cb() {
        ?>
        <h1>Customize</h1>
        <?php
    }


    // style-1 - default theme button
    function ht_ctc_s1_cb() {

        $options = get_option('ht_ctc_s1');
        ?>
        <ul class="collapsible" data-collapsible="accordion">
        <li>
        <div class="collapsible-header"><?php _e( 'Style 1', 'click-to-chat-for-whatsapp' ); ?></div>
        <div class="collapsible-body">

        <!-- not make empty table -->
        <input name="ht_ctc_s1[hello]" value="hello" id="" type="text" class="hide" >

        <p class="description"><?php _e( 'Style-1 is a button that appears like themes button', 'click-to-chat-for-whatsapp' ); ?></p>

        </div>
        </div>
        </li>
        </ul>
        
        <?php
    }



    // style-2 - ht_ctc_s2 - whatsapp ios style icon
    function ht_ctc_s2_cb() {

        $options = get_option('ht_ctc_s2');
        $s2_img_size = ( isset( $options['s2_img_size']) ) ? esc_attr( $options['s2_img_size'] ) : '';
        ?>
        <ul class="collapsible" data-collapsible="accordion">
        <li>
        <div class="collapsible-header"><?php _e( 'Style 2', 'click-to-chat-for-whatsapp' ); ?></div>
        <div class="collapsible-body">


        <!-- img size -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Image Size', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s2[s2_img_size]" value="<?php echo $s2_img_size ?>" id="s2_img_size" type="text" class="" >
                <label for="s2_img_size"><?php _e( 'Image Size', 'click-to-chat-for-whatsapp' ); ?></label>
            </div>
        </div>


        </div>
        </div>
        </li>
        </ul>
        
        <?php
    }



    // style-3 - ht_ctc_s3 - whatsapp andriod style icon
    function ht_ctc_s3_cb() {

        $options = get_option('ht_ctc_s3');
        
        $select_s3_type = ( isset( $options['s3_type']) ) ? esc_attr( $options['s3_type'] ) : '1';

        $s3_img_size = ( isset( $options['s3_img_size']) ) ? esc_attr( $options['s3_img_size'] ) : '';

        $s3_extend_img_size = ( isset( $options['s3_extend_img_size']) ) ? esc_attr( $options['s3_extend_img_size'] ) : '';
        $s3_padding = ( isset( $options['s3_padding']) ) ? esc_attr( $options['s3_padding'] ) : '';

        $s3_bg_color = ( isset( $options['s3_bg_color']) ) ? esc_attr( $options['s3_bg_color'] ) : '';
        $s3_bg_color_hover = ( isset( $options['s3_bg_color_hover']) ) ? esc_attr( $options['s3_bg_color_hover'] ) : '';

        // has sometimes js in not updating - can remove this later
        $s3_extend_display = "";
        if ( 'simple' == $select_s3_type ) {
            // hide extend features
            $s3_extend_display = "display: none;";
        }

        ?>
        <ul class="collapsible" data-collapsible="accordion">
        <li>
        <div class="collapsible-header"><?php _e( 'Style 3', 'click-to-chat-for-whatsapp' ); ?></div>
        <div class="collapsible-body">

        <!-- Simple / Extend -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Style-3: Simple/Extend', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <select name="ht_ctc_s3[s3_type]" class="select_style_3_type">
                    <option value="simple" <?php echo $select_s3_type == 'simple' ? 'SELECTED' : ''; ?> >Simple</option>
                    <option value="extend" <?php echo $select_s3_type == 'extend' ? 'SELECTED' : ''; ?> >Extend</option>
                </select>
            </div>
        </div>


        <!-- img size -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Image Size', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s3[s3_img_size]" value="<?php echo $s3_img_size ?>" id="s3_img_size" type="text" class="" >
                <label for="s3_img_size"><?php _e( 'Image Size (Default: 50px )', 'click-to-chat-for-whatsapp' ); ?></label>
            </div>
        </div>

        <!-- extend settings -->
        <div class="s3_type_extend" style="<?php echo $s3_extend_display ?>">
            
            <!-- padding -->
            <div class="row">
                <div class="col s6">
                    <p><?php _e( 'Padding', 'click-to-chat-for-whatsapp' ); ?></p>
                </div>
                <div class="input-field col s6">
                    <input name="ht_ctc_s3[s3_padding]" value="<?php echo $s3_padding ?>" id="s3_padding" type="text" class="" >
                    <label for="s3_padding"><?php _e( 'Padding (Default: 20px )', 'click-to-chat-for-whatsapp' ); ?></label>
                </div>
            </div>

            <!-- background color -->
            <div class="row">
                <div class="col s6">
                    <p><?php _e( 'Background Color', 'click-to-chat-for-whatsapp' ); ?></p>
                </div>
                <div class="input-field col s6">
                    <input class="ht-ctc-color" name="ht_ctc_s3[s3_bg_color]" data-default-color="#25D366" value="<?php echo $s3_bg_color ?>" id="s3_bg_color" type="text">
                </div>
            </div>

            <!-- background color hover -->
            <div class="row">
                <div class="col s6">
                    <p><?php _e( 'Background Color on Hover', 'click-to-chat-for-whatsapp' ); ?></p>
                </div>
                <div class="input-field col s6">
                    <input class="ht-ctc-color" name="ht_ctc_s3[s3_bg_color_hover]" data-default-color="#25D366" value="<?php echo $s3_bg_color_hover ?>" id="s3_bg_color_hover" type="text">
                    <p class="description"><?php _e( 'E.g. Colors: #25D366, #20b038', 'click-to-chat-for-whatsapp' ); ?> </p>
                </div>
            </div>
            <?php

            // shadow
            if ( isset( $options['s3_box_shadow'] ) ) {
            ?>
            <p>
                <label>
                    <input name="ht_ctc_s3[s3_box_shadow]" type="checkbox" value="1" <?php checked( $options['s3_box_shadow'], 1 ); ?> id="s3_box_shadow" />
                    <span><?php _e( 'Shadow', 'click-to-chat-for-whatsapp' ); ?></span>
                </label>
            </p>
            <?php
            } else {
                ?>
                <p>
                    <label>
                        <input name="ht_ctc_s3[s3_box_shadow]" type="checkbox" value="1" id="s3_box_shadow" />
                        <span><?php _e( 'Shadow', 'click-to-chat-for-whatsapp' ); ?></span>
                    </label>
                </p>
                <?php
            }

            // shadow on hover
            if ( isset( $options['s3_box_shadow_hover'] ) ) {
            ?>
            <p>
                <label>
                    <input name="ht_ctc_s3[s3_box_shadow_hover]" type="checkbox" value="1" <?php checked( $options['s3_box_shadow_hover'], 1 ); ?> id="s3_box_shadow_hover" />
                    <span><?php _e( 'Shadow on Hover', 'click-to-chat-for-whatsapp' ); ?></span>
                </label>
            </p>
            <?php
            } else {
                ?>
                <p>
                    <label>
                        <input name="ht_ctc_s3[s3_box_shadow_hover]" type="checkbox" value="1" id="s3_box_shadow_hover" />
                        <span><?php _e( 'Shadow on Hover', 'click-to-chat-for-whatsapp' ); ?></span>
                    </label>
                </p>
                <?php
            }
            ?>


        </div>

        </div>
        </div>
        </li>
        </ul>
        
        <?php
    }



    // style-4  - ht_ctc_s4 - chip
    function ht_ctc_s4_cb() {

        $options = get_option('ht_ctc_s4');
        $s4_text_color = ( isset( $options['s4_text_color']) ) ? esc_attr( $options['s4_text_color'] ) : '';
        $s4_bg_color = ( isset( $options['s4_bg_color']) ) ? esc_attr( $options['s4_bg_color'] ) : '';
        $s4_img_url = ( isset( $options['s4_img_url']) ) ? esc_attr( $options['s4_img_url'] ) : '';
        $s4_img_size = ( isset( $options['s4_img_size']) ) ? esc_attr( $options['s4_img_size'] ) : '';
        $select_s4_img_position = ( isset( $options['s4_img_position']) ) ? esc_attr( $options['s4_img_position'] ) : '';
        ?>
        <ul class="collapsible" data-collapsible="accordion">
        <li>
        <div class="collapsible-header">Style 4</div>
        <div class="collapsible-body">

        <!-- text color -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Text Color', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input class="ht-ctc-color" name="ht_ctc_s4[s4_text_color]" data-default-color="#7f7d7d" value="<?php echo $s4_text_color ?>" id="s4_text_color" type="text">
            </div>
        </div>

        <!-- background color -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Background Color', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input id="s4_bg_color" class="ht-ctc-color" data-default-color="#e4e4e4" name="ht_ctc_s4[s4_bg_color]" value="<?php echo $s4_bg_color ?>" type="text" style="height: 1.375rem;" >
            </div>
        </div>

        <!-- Image position -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Image Position', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <select name="ht_ctc_s4[s4_img_position]" class="select-2">
                    <option value="left" <?php echo $select_s4_img_position == 'left' ? 'SELECTED' : ''; ?> >Left</option>
                    <option value="right" <?php echo $select_s4_img_position == 'right' ? 'SELECTED' : ''; ?> >Right</option>
                </select>
            </div>
        </div>

        <!-- image url -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Image URL', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s4[s4_img_url]" value="<?php echo $s4_img_url ?>" id="s4_img_url" type="text" class="" >
                <label for="s4_img_url"><?php _e( 'Image URL(leave blank for default image)', 'click-to-chat-for-whatsapp' ); ?></label>
            </div>
        </div>

        <!-- img size -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Image Size', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s4[s4_img_size]" value="<?php echo $s4_img_size ?>" id="s4_img_size" type="text" class="" >
                <label for="s4_img_size"><?php _e( 'Image Size (default 32px)', 'click-to-chat-for-whatsapp' ); ?></label>
                <p class="description"><?php _e( '(possible, keep the value less then or equal to 32px)', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
        </div>


        </div>
        </div>
        </li>
        </ul>
        
        <?php
    }



    // style-5  - ht_ctc_s5 - chip
    function ht_ctc_s5_cb() {

        $options = get_option('ht_ctc_s5');
        $s5_line_1 = ( isset( $options['s5_line_1']) ) ? esc_attr( $options['s5_line_1'] ) : '';
        $s5_line_2 = ( isset( $options['s5_line_2']) ) ? esc_attr( $options['s5_line_2'] ) : '';
        $s5_line_1_color = ( isset( $options['s5_line_1_color']) ) ? esc_attr( $options['s5_line_1_color'] ) : '';
        $s5_line_2_color = ( isset( $options['s5_line_2_color']) ) ? esc_attr( $options['s5_line_2_color'] ) : '';
        $s5_background_color = ( isset( $options['s5_background_color']) ) ? esc_attr( $options['s5_background_color'] ) : '';
        $s5_border_color = ( isset( $options['s5_border_color']) ) ? esc_attr( $options['s5_border_color'] ) : '';
        $s5_img = ( isset( $options['s5_img']) ) ? esc_attr( $options['s5_img'] ) : '';
        $s5_img_height = ( isset( $options['s5_img_height']) ) ? esc_attr( $options['s5_img_height'] ) : '';
        $s5_img_width = ( isset( $options['s5_img_width']) ) ? esc_attr( $options['s5_img_width'] ) : '';
        $s5_content_height = ( isset( $options['s5_content_height']) ) ? esc_attr( $options['s5_content_height'] ) : '';
        $s5_content_width = ( isset( $options['s5_content_width']) ) ? esc_attr( $options['s5_content_width'] ) : '';
        $select_s5_img_position = ( isset( $options['s5_img_position']) ) ? esc_attr( $options['s5_img_position'] ) : '';
        ?>
        <ul class="collapsible" data-collapsible="accordion">
        <li>
        <div class="collapsible-header"><?php _e( 'Style 5', 'click-to-chat-for-whatsapp' ); ?></div>
        <div class="collapsible-body">

        <!-- s5_line_1 -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Line 1', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s5[s5_line_1]" value="<?php echo $s5_line_1 ?>" id="s5_line_1" type="text" class="" >
                <label for="s5_line_1"><?php _e( 'Line 1', 'click-to-chat-for-whatsapp' ); ?></label>
            </div>
        </div>

        <!-- s5_line_2 -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Line 2', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s5[s5_line_2]" value="<?php echo $s5_line_2 ?>" id="s5_line_2" type="text" class="" >
                <label for="s5_line_2"><?php _e( 'Line 2', 'click-to-chat-for-whatsapp' ); ?></label>
            </div>
        </div>

        <!-- s5_line_1_color -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Line 1 - Text Color', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input class="ht-ctc-color" name="ht_ctc_s5[s5_line_1_color]" data-default-color="#000000" value="<?php echo $s5_line_1_color ?>" id="s5_line_1_color" type="text">
            </div>
        </div>

        <!-- s5_line_2_color -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Line 2 - Text Color', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input class="ht-ctc-color" name="ht_ctc_s5[s5_line_2_color]" data-default-color="#000000" value="<?php echo $s5_line_2_color ?>" id="s5_line_2_color" type="text">
            </div>
        </div>

        <!-- s5_background_color -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Content Box Background Color', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input class="ht-ctc-color" name="ht_ctc_s5[s5_background_color]" data-default-color="#ffffff" value="<?php echo $s5_background_color ?>" id="s5_background_color" type="text">
            </div>
        </div>

        <!-- s5_border_color -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Content Box Border Color', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input class="ht-ctc-color" name="ht_ctc_s5[s5_border_color]" data-default-color="#dddddd" value="<?php echo $s5_border_color ?>" id="s5_border_color" type="text">
            </div>
        </div>

        <!-- s5_img -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Image URL', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s5[s5_img]" value="<?php echo $s5_img ?>" id="s5_img" type="text" class="" >
                <label for="s5_img">Leave blank for default image</label>
            </div>
        </div>

        <!-- s5_img_height -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Image Height', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s5[s5_img_height]" value="<?php echo $s5_img_height ?>" id="s5_img_height" type="text" class="" >
                <label for="s5_img_height"><?php _e( 'Image Height', 'click-to-chat-for-whatsapp' ); ?></label>
            </div>
        </div>

        <!-- s5_img_width -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Image Width', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s5[s5_img_width]" value="<?php echo $s5_img_width ?>" id="s5_img_width" type="text" class="" >
                <label for="s5_img_width"><?php _e( 'Image Width', 'click-to-chat-for-whatsapp' ); ?></label>
            </div>
        </div>

        <!-- s5_content_height -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Content Box Height', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s5[s5_content_height]" value="<?php echo $s5_content_height ?>" id="s5_content_height" type="text" class="" >
                <label for="s5_content_height"><?php _e( 'Content Box Height', 'click-to-chat-for-whatsapp' ); ?></label>
            </div>
        </div>

        <!-- s5_content_width -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Content Box Width', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s5[s5_content_width]" value="<?php echo $s5_content_width ?>" id="s5_content_width" type="text" class="" >
                <label for="s5_content_width"><?php _e( 'Content Box Width', 'click-to-chat-for-whatsapp' ); ?></label>
            </div>
        </div>

        <!-- s5_img_position -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Image Position', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <select name="ht_ctc_s5[s5_img_position]" class="select-2">
                    <option value="right" <?php echo $select_s5_img_position == 'right' ? 'SELECTED' : ''; ?> ><?php _e( 'Right', 'click-to-chat-for-whatsapp' ); ?></option>
                    <option value="left" <?php echo $select_s5_img_position == 'left' ? 'SELECTED' : ''; ?> ><?php _e( 'Left', 'click-to-chat-for-whatsapp' ); ?></option>
                </select>
                <p class="description"><?php _e( 'If style position/located: Right to screen then select Right, if Left to screen then select Left', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
        </div>


        </div>
        </div>
        </li>
        </ul>
        
        <?php
    }

    


    // style-6 - ht_ctc_s6 - plain link
    function ht_ctc_s6_cb() {

        $options = get_option('ht_ctc_s6');
        $s6_txt_color = ( isset( $options['s6_txt_color']) ) ? esc_attr( $options['s6_txt_color'] ) : '';
        $s6_txt_color_on_hover = ( isset( $options['s6_txt_color_on_hover']) ) ? esc_attr( $options['s6_txt_color_on_hover'] ) : '';
        $text_decoration_value = ( isset( $options['s6_txt_decoration']) ) ? esc_attr( $options['s6_txt_decoration'] ) : '';
        $text_decoration_hover_value = ( isset( $options['s6_txt_decoration_on_hover']) ) ? esc_attr( $options['s6_txt_decoration_on_hover'] ) : '';
        ?>
        <ul class="collapsible" data-collapsible="accordion">
        <li>
        <div class="collapsible-header">Style 6</div>
        <div class="collapsible-body">

        <!-- text color -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Text Color', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <!-- <input id="s6_txt_color" class="ht-ctc-color" data-default-color="#006ccc" name="ht_ctc_s6[s6_txt_color]" value="<?php echo $s6_txt_color ?>" type="text" style="height: 1.375rem;" > -->
                <input id="s6_txt_color" class="ht-ctc-color" name="ht_ctc_s6[s6_txt_color]" value="<?php echo $s6_txt_color ?>" type="text" style="height: 1.375rem;" >
            </div>
        </div>


        <!-- text color on hover -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Text Color on Hover', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <!-- <input id="s6_txt_color_on_hover" class="ht-ctc-color" data-default-color="#006ccc" name="ht_ctc_s6[s6_txt_color_on_hover]" value="<?php echo $s6_txt_color_on_hover ?>" type="text" style="height: 1.375rem;" > -->
                <input id="s6_txt_color_on_hover" class="ht-ctc-color" name="ht_ctc_s6[s6_txt_color_on_hover]" value="<?php echo $s6_txt_color_on_hover ?>" type="text" style="height: 1.375rem;" >
            </div>
        </div>

        <!-- Text Decoration - none/initial/underline/overline/... -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Text Decoration', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <select name="ht_ctc_s6[s6_txt_decoration]" class="select-2">
                    <option value="initial" <?php echo $text_decoration_value == 'initial' ? 'SELECTED' : ''; ?> >initial</option>
                    <option value="underline" <?php echo $text_decoration_value == 'underline' ? 'SELECTED' : ''; ?> >underline</option>
                    <option value="overline" <?php echo $text_decoration_value == 'overline' ? 'SELECTED' : ''; ?> >overline</option>
                    <option value="line-through" <?php echo $text_decoration_value == 'line-through' ? 'SELECTED' : ''; ?> >line-through</option>
                    <option value="inherit" <?php echo $text_decoration_value == 'inherit' ? 'SELECTED' : ''; ?> >inherit</option>
                </select>
                <!-- <label>Text Decoration</label> -->
            </div>
        </div>

        <!-- Text Decoration when hover - none/initial/underline/overline/... -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Text Decoration when Hover', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <select name="ht_ctc_s6[s6_txt_decoration_on_hover]" class="select-2">
                    <option value="initial" <?php echo $text_decoration_hover_value == 'initial' ? 'SELECTED' : ''; ?> >initial</option>
                    <option value="underline" <?php echo $text_decoration_hover_value == 'underline' ? 'SELECTED' : ''; ?> >underline</option>
                    <option value="overline" <?php echo $text_decoration_hover_value == 'overline' ? 'SELECTED' : ''; ?> >overline</option>
                    <option value="line-through" <?php echo $text_decoration_hover_value == 'line-through' ? 'SELECTED' : ''; ?> >line-through</option>
                    <option value="inherit" <?php echo $text_decoration_hover_value == 'inherit' ? 'SELECTED' : ''; ?> >inherit</option>
                </select>
                <!-- <label>Text Decoration when Hover</label> -->
            </div>
        </div>

        </div>
        </div>
        </li>
        </ul>
        
        <?php
    }


    // style-7 - ht_ctc_s7 - plain link
    function ht_ctc_s7_cb() {

        $options = get_option('ht_ctc_s7');
        $s7_icon_size = ( isset( $options['s7_icon_size']) ) ? esc_attr( $options['s7_icon_size'] ) : '';
        $s7_icon_color = ( isset( $options['s7_icon_color']) ) ? esc_attr( $options['s7_icon_color'] ) : '';
        $s7_icon_color_hover = ( isset( $options['s7_icon_color_hover']) ) ? esc_attr( $options['s7_icon_color_hover'] ) : '';
        $s7_border_size = ( isset( $options['s7_border_size']) ) ? esc_attr( $options['s7_border_size'] ) : '';
        $s7_border_color = ( isset( $options['s7_border_color']) ) ? esc_attr( $options['s7_border_color'] ) : '';
        $s7_border_color_hover = ( isset( $options['s7_border_color_hover']) ) ? esc_attr( $options['s7_border_color_hover'] ) : '';
        $s7_border_radius = ( isset( $options['s7_border_radius']) ) ? esc_attr( $options['s7_border_radius'] ) : '';
        ?>
        <ul class="collapsible" data-collapsible="accordion">
        <li>
        <div class="collapsible-header"><?php _e( 'Style 7', 'click-to-chat-for-whatsapp' ); ?></div>
        <div class="collapsible-body">

        <!-- s7_icon_size -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Icon Size', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s7[s7_icon_size]" value="<?php echo $s7_icon_size ?>" id="s7_icon_size" type="text" class="" >
                <label for="s7_icon_size"><?php _e( 'Icon Size', 'click-to-chat-for-whatsapp' ); ?></label>
            </div>
        </div>

        <!-- s7_icon_color -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Icon Color', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input id="s7_icon_color" class="ht-ctc-color" data-default-color="#ffffff" name="ht_ctc_s7[s7_icon_color]" value="<?php echo $s7_icon_color ?>" type="text" style="height: 1.375rem;" >
            </div>
        </div>

        <!-- s7_icon_color_hover -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Icon Color on Hover', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input id="s7_icon_color_hover" class="ht-ctc-color" data-default-color="#6b6b6b" name="ht_ctc_s7[s7_icon_color_hover]" value="<?php echo $s7_icon_color_hover ?>" type="text" style="height: 1.375rem;" >
            </div>
        </div>

        <!-- s7_border_size -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Border Padding Size', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s7[s7_border_size]" value="<?php echo $s7_border_size ?>" id="s7_border_size" type="text" class="" >
                <label for="s7_border_size"><?php _e( 'Border Padding Size', 'click-to-chat-for-whatsapp' ); ?></label>
                <p class="description"><?php _e( 'E.g. 12px', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
        </div>

        <!-- s7_border_color -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Background Color', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input id="s7_border_color" class="ht-ctc-color" data-default-color="#25d366" name="ht_ctc_s7[s7_border_color]" value="<?php echo $s7_border_color ?>" type="text" style="height: 1.375rem;" >
            </div>
        </div>

        <!-- s7_border_color_hover -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Background Color on Hover', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input id="s7_border_color_hover" class="ht-ctc-color" data-default-color="#25d366" name="ht_ctc_s7[s7_border_color_hover]" value="<?php echo $s7_border_color_hover ?>" type="text" style="height: 1.375rem;" >
            </div>
        </div>

        <!-- s7_border_radius -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Border radius', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s7[s7_border_radius]" value="<?php echo $s7_border_radius ?>" id="s7_border_radius" type="text" class="" >
                <label for="s7_border_radius"><?php _e( 'Border radius', 'click-to-chat-for-whatsapp' ); ?></label>
                <p class="description"><?php _e( 'E.g. 10px, 50% ( for round border add 50% )', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
        </div>
        <br>
        <p class="description"><?php _e( 'To display icon only - clear background-color. (May need to change icon color to display in plain background)', 'click-to-chat-for-whatsapp' ); ?> </p>

        </div>
        </div>
        </li>
        </ul>
        
        <?php
    }




    // style-8 - ht_ctc_s8 - button with icon
    function ht_ctc_s8_cb() {

        $options = get_option('ht_ctc_s8');
        $s8_txt_color = ( isset( $options['s8_txt_color']) ) ? esc_attr( $options['s8_txt_color'] ) : '';
        $s8_txt_color_on_hover = ( isset( $options['s8_txt_color_on_hover']) ) ? esc_attr( $options['s8_txt_color_on_hover'] ) : '';
        $s8_bg_color = ( isset( $options['s8_bg_color']) ) ? esc_attr( $options['s8_bg_color'] ) : '';
        $s8_bg_color_on_hover = ( isset( $options['s8_bg_color_on_hover']) ) ? esc_attr( $options['s8_bg_color_on_hover'] ) : '';
        $s8_icon_color = ( isset( $options['s8_icon_color']) ) ? esc_attr( $options['s8_icon_color'] ) : '';
        $s8_icon_color_on_hover = ( isset( $options['s8_icon_color_on_hover']) ) ? esc_attr( $options['s8_icon_color_on_hover'] ) : '';
        $icon_position_value = ( isset( $options['s8_icon_position']) ) ? esc_attr( $options['s8_icon_position'] ) : '';
        $s8_text_size = ( isset( $options['s8_text_size']) ) ? esc_attr( $options['s8_text_size'] ) : '';
        $s8_icon_size = ( isset( $options['s8_icon_size']) ) ? esc_attr( $options['s8_icon_size'] ) : '';
        $s8_btn_size = ( isset( $options['s8_btn_size']) ) ? esc_attr( $options['s8_btn_size'] ) : '';
        ?>
        <ul class="collapsible" data-collapsible="accordion">
        <li>
        <div class="collapsible-header"><?php _e( 'Style 8', 'click-to-chat-for-whatsapp' ); ?></div>
        <div class="collapsible-body">


        <!-- text color -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Text Color', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input id="s8_txt_color" class="ht-ctc-color" data-default-color="#ffffff" name="ht_ctc_s8[s8_txt_color]" value="<?php echo $s8_txt_color ?>" type="text" style="height: 1.375rem;" >
                <!-- <label for="s3_img_url">Text Color</label> -->
                <!-- <p class="description">Default Color: #ffffff</p> -->
            </div>
        </div>

        <!-- text color on hover -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Text Color on Hover', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input id="s8_txt_color_on_hover" class="ht-ctc-color" data-default-color="#ffffff" name="ht_ctc_s8[s8_txt_color_on_hover]" value="<?php echo $s8_txt_color_on_hover ?>" type="text" style="height: 1.375rem;" >
                <!-- <label for="s3_img_url">Text Color on Hover</label> -->
                <!-- <p class="description">Default Color: #ffffff</p> -->
            </div>
        </div>

        <!-- background color -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Background Color', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input id="s8_bg_color" class="ht-ctc-color" data-default-color="#26a69a" name="ht_ctc_s8[s8_bg_color]" value="<?php echo $s8_bg_color ?>" type="text" style="height: 1.375rem;" >
                <!-- <label for="s3_img_url">Background Color</label> -->
                <!-- <p class="description">Default Color: #26a69a</p> -->
            </div>
        </div>

        <!-- background color on hover -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Background Color on Hover', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input id="s8_bg_color_on_hover" class="ht-ctc-color" data-default-color="#26a69a" name="ht_ctc_s8[s8_bg_color_on_hover]" value="<?php echo $s8_bg_color_on_hover ?>" type="text" style="height: 1.375rem;" >
                <!-- <label for="s3_img_url">Background Color on Hover</label> -->
                <!-- <p class="description">Default Color: #26a69a</p> -->
            </div>
        </div>

        <!-- icon color -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Icon Color', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input id="s8_icon_color" class="ht-ctc-color" data-default-color="#ffffff" name="ht_ctc_s8[s8_icon_color]" value="<?php echo $s8_icon_color ?>" type="text" style="height: 1.375rem;" >
                <!-- <label for="s3_img_url">Icon Color</label> -->
                <!-- <p class="description">Default Color: #ffffff</p> -->
            </div>
        </div>

        <!-- icon color on hover -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Icon Color on Hover', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input id="s8_icon_color_on_hover" class="ht-ctc-color" data-default-color="#ffffff" name="ht_ctc_s8[s8_icon_color_on_hover]" value="<?php echo $s8_icon_color_on_hover ?>" type="text" style="height: 1.375rem;" >
                <!-- <label for="s3_img_url">Icon Color on Hover</label> -->
                <!-- <p class="description">Default Color: #ffffff</p> -->
            </div>
        </div>



        <!-- icon position - left/right -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Icon Position', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <select name="ht_ctc_s8[s8_icon_position]" class="select-2">
                    <option value="left" <?php echo $icon_position_value == 'left' ? 'SELECTED' : ''; ?> >Left</option>
                    <option value="right" <?php echo $icon_position_value == 'right' ? 'SELECTED' : ''; ?> >Right</option>
                    <option value="hide" <?php echo $icon_position_value == 'hide' ? 'SELECTED' : ''; ?> >Hide</option>
                </select>
                <!-- <label>Icon Position</label> -->
            </div>
        </div>


        <!-- Text Size -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Text Size', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s8[s8_text_size]" value="<?php echo $s8_text_size ?>" id="s8_text_size" type="text" class="" >
                <label for="s8_text_size"><?php _e( 'Text Size  -  E.g. 12px', 'click-to-chat-for-whatsapp' ); ?></label>
                <span class="helper-text"><?php _e( 'Leave blank for default settings', 'click-to-chat-for-whatsapp' ); ?></span>
            </div>
        </div>

        <!-- Icon Size -->
        <div class="row">
            <div class="col s6">
                <p>Icon Size</p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s8[s8_icon_size]" value="<?php echo $s8_icon_size ?>" id="s8_icon_size" type="text" class="" >
                <label for="s8_icon_size"><?php _e( 'Icon Size  -  E.g. 16px', 'click-to-chat-for-whatsapp' ); ?></label>
                <span class="helper-text"><?php _e( 'Leave blank for default settings', 'click-to-chat-for-whatsapp' ); ?></span>
            </div>
        </div>

        <!-- button size - btn, btn-large -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Button Size', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <select name="ht_ctc_s8[s8_btn_size]" class="select-2">
                    <option value="btn" <?php echo $s8_btn_size == 'btn' ? 'SELECTED' : ''; ?> ><?php _e( 'Normal', 'click-to-chat-for-whatsapp' ); ?></option>
                    <option value="btn-large" <?php echo $s8_btn_size == 'btn-large' ? 'SELECTED' : ''; ?> ><?php _e( 'Large', 'click-to-chat-for-whatsapp' ); ?></option>
                </select>
            </div>
        </div>



        </div>
        </div>
        </li>
        </ul>
        
        <?php
    }


    // style-99 - ht_ctc_s99 - own image
    function ht_ctc_s99_cb() {

        $options = get_option('ht_ctc_s99');
        $s99_dekstop_img_url = ( isset( $options['s99_dekstop_img_url']) ) ? esc_attr( $options['s99_dekstop_img_url'] ) : '';
        $s99_mobile_img_url = ( isset( $options['s99_mobile_img_url']) ) ? esc_attr( $options['s99_mobile_img_url'] ) : '';
        $s99_desktop_img_height = ( isset( $options['s99_desktop_img_height']) ) ? esc_attr( $options['s99_desktop_img_height'] ) : '';
        $s99_desktop_img_width = ( isset( $options['s99_desktop_img_width']) ) ? esc_attr( $options['s99_desktop_img_width'] ) : '';
        $s99_mobile_img_height = ( isset( $options['s99_mobile_img_height']) ) ? esc_attr( $options['s99_mobile_img_height'] ) : '';
        $s99_mobile_img_width = ( isset( $options['s99_mobile_img_width']) ) ? esc_attr( $options['s99_mobile_img_width'] ) : '';
        ?>
        <ul class="collapsible" data-collapsible="accordion">
        <li>
        <div class="collapsible-header"><?php _e( 'Style 99 - Own Image / GIF', 'click-to-chat-for-whatsapp' ); ?></div>
        <div class="collapsible-body">

        <!-- Image URL - Desktop -->
        <div class="row">
            <!-- <div class="col s6">
                <p>Image URL</p>
            </div> -->
            <div class="input-field col s12">
                <input name="ht_ctc_s99[s99_dekstop_img_url]" value="<?php echo $s99_dekstop_img_url ?>" id="s99_dekstop_img_url" type="text" class="" >
                <label for="s99_dekstop_img_url"><?php _e( 'Image URL - Desktop', 'click-to-chat-for-whatsapp' ); ?></label>
            </div>
        </div>

        <!-- Image URL - Mobile -->
        <div class="row">
            <!-- <div class="col s6">
                <p>Image URL</p>
            </div> -->
            <div class="input-field col s12">
                <input name="ht_ctc_s99[s99_mobile_img_url]" value="<?php echo $s99_mobile_img_url ?>" id="s99_mobile_img_url" type="text" class="" >
                <label for="s99_mobile_img_url"><?php _e( 'Image URL - Mobile', 'click-to-chat-for-whatsapp' ); ?></label>
            </div>
        </div>

        <!-- Desktop - Image Height -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Desktop - Image Height', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s99[s99_desktop_img_height]" value="<?php echo $s99_desktop_img_height ?>" id="s99_desktop_img_height" type="text" class="" >
                <label for="s99_desktop_img_height"><?php _e( 'Desktop - Image Height', 'click-to-chat-for-whatsapp' ); ?></label>
            </div>
        </div>

        <!-- Desktop - Image Width -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Desktop - Image Width', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s99[s99_desktop_img_width]" value="<?php echo $s99_desktop_img_width ?>" id="s99_desktop_img_width" type="text" class="" >
                <label for="s99_desktop_img_width"><?php _e( 'Desktop - Image Width', 'click-to-chat-for-whatsapp' ); ?></label>
            </div>
        </div>

        <!-- Mobile - Image Height -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Mobile - Image Height', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s99[s99_mobile_img_height]" value="<?php echo $s99_mobile_img_height ?>" id="s99_mobile_img_height" type="text" class="" >
                <label for="s99_mobile_img_height"><?php _e( 'Mobile - Image Height', 'click-to-chat-for-whatsapp' ); ?></label>
            </div>
        </div>

        <!-- Mobile - Image Width -->
        <div class="row">
            <div class="col s6">
                <p><?php _e( 'Mobile - Image Width', 'click-to-chat-for-whatsapp' ); ?></p>
            </div>
            <div class="input-field col s6">
                <input name="ht_ctc_s99[s99_mobile_img_width]" value="<?php echo $s99_mobile_img_width ?>" id="s99_mobile_img_width" type="text" class="" >
                <label for="s99_mobile_img_width"><?php _e( 'Mobile - Image Width', 'click-to-chat-for-whatsapp' ); ?></label>
            </div>
        </div>


        </div>
        </div>
        </li>
        </ul>
        
        <?php
    }



    // Other settings
    //      fb analytics
    //      detect device
    function ht_ctc_othersettings_cb() {

        $options = get_option('ht_ctc_othersettings');
        $dbrow = 'ht_ctc_othersettings';
        ?>

        <ul class="collapsible" data-collapsible="accordion" id="ht_ctc_othersettings">
        <li class="active">
        <div class="collapsible-header"><?php _e( 'Other settings', 'click-to-chat-for-whatsapp' ); ?></div>
        <div class="collapsible-body">

        <!-- not make empty table -->
        <input name="ht_ctc_othersettings[hello]" value="hello" id="" type="hidden" class="hide" >

        <?php
        // cache issue while selecting styles
        if ( isset( $options['select_styles_issue'] ) ) {
            ?>
            <p id="styles_issue">
                <label>
                    <input name="<?php echo $dbrow ?>[select_styles_issue]" type="checkbox" value="1" <?php checked( $options['select_styles_issue'], 1 ); ?> id="select_styles_issue" />
                    <!-- <span>Style for device is not as expected(due to cache)</span> -->
                    <span><?php _e( 'Check this only, If styles for mobile, desktop not selected as expected(due to cache)', 'click-to-chat-for-whatsapp' ); ?></span>
                </label>
            </p>
            <?php
        } else {
            ?>
            <p id="styles_issue">
                <label>
                    <input name="<?php echo $dbrow ?>[select_styles_issue]" type="checkbox" value="1" id="select_styles_issue" />
                    <span><?php _e( 'Check this only, If styles for mobile, desktop not selected as expected(due to cache)', 'click-to-chat-for-whatsapp' ); ?></span>
                </label>
            </p>
            <?php
        }
        ?>
            <p class="description">  - <a target="_blank" href="https://holithemes.com/plugins/click-to-chat/select-styles/"><?php _e( 'more info', 'click-to-chat-for-whatsapp' ); ?></a> </p>
        <br>
        <?php

        // enable group
        if ( isset( $options['enable_group'] ) ) {
        ?>
        <p>
            <label>
                <input name="ht_ctc_othersettings[enable_group]" type="checkbox" value="1" <?php checked( $options['enable_group'], 1 ); ?> id="enable_group" />
                <span><?php _e( 'Enable Group Features', 'click-to-chat-for-whatsapp' ); ?></span>
            </label>
            <p class="description">  - <a href="<?php echo admin_url( 'admin.php?page=click-to-chat-group-feature' ); ?>"><?php _e( 'Group Settings page', 'click-to-chat-for-whatsapp' ); ?></a> </p>
        </p>
        <?php
        } else {
            ?>
            <p>
                <label>
                    <input name="ht_ctc_othersettings[enable_group]" type="checkbox" value="1" id="enable_group" />
                    <span><?php _e( 'Enable Group Features', 'click-to-chat-for-whatsapp' ); ?></span>
                </label>
            </p>
            <p class="description">  - <a target="_blank" href="https://www.holithemes.com/plugins/click-to-chat/enable-group"><?php _e( 'more info', 'click-to-chat-for-whatsapp' ); ?></a> </p>
            <?php
        }
        ?>
        <br>
        <?php


        // enable share
        if ( isset( $options['enable_share'] ) ) {
        ?>
        <p>
            <label>
                <input name="ht_ctc_othersettings[enable_share]" type="checkbox" value="1" <?php checked( $options['enable_share'], 1 ); ?> id="enable_share" />
                <span><?php _e( 'Enable Share Features', 'click-to-chat-for-whatsapp' ); ?></span>
            </label>
            <p class="description">  - <a href="<?php echo admin_url( 'admin.php?page=click-to-chat-share-feature' ); ?>"><?php _e( 'Share Settings page', 'click-to-chat-for-whatsapp' ); ?></a> </p>
        </p>
        <?php
        } else {
            ?>
            <p>
                <label>
                    <input name="ht_ctc_othersettings[enable_share]" type="checkbox" value="1" id="enable_share" />
                    <span><?php _e( 'Enable Share Features', 'click-to-chat-for-whatsapp' ); ?></span>
                </label>
            </p>
            <p class="description">  - <a target="_blank" href="https://www.holithemes.com/plugins/click-to-chat/enable-share"><?php _e( 'more info', 'click-to-chat-for-whatsapp' ); ?></a> </p>
            <?php
        }
        ?>
        <br>
        
        <!-- chat -->
        <p class="description"><?php _e( "Chat settings are enabled by default and can't disbale. If like to hide chat on all pages select", 'click-to-chat-for-whatsapp' ); ?> <a target="_blank" href="<?php echo admin_url( 'admin.php?page=click-to-chat#showhide_settings' ); ?>"><?php _e( 'show on selected pages', 'click-to-chat-for-whatsapp' ); ?></a> </p>
        <p class="description"> - <a target="_blank" href="<?php echo admin_url( 'admin.php?page=click-to-chat' ); ?>"><?php _e( 'Chat Settings page', 'click-to-chat-for-whatsapp' ); ?></a> <br> - <a target="_blank" href="https://www.holithemes.com/plugins/click-to-chat/enable-chat"><?php _e( 'more info', 'click-to-chat-for-whatsapp' ); ?></a> </p>
        </p>
        <br>
        
        <?php
        // Facebook Analytics
        if ( isset( $options['fb_analytics'] ) ) {
            ?>
            <p>
                <label>
                    <input name="ht_ctc_othersettings[fb_analytics]" type="checkbox" value="1" <?php checked( $options['fb_analytics'], 1 ); ?> id="fb_analytics" />
                    <span><?php _e( 'Facebook Analytics', 'click-to-chat-for-whatsapp' ); ?></span>
                </label>
            </p>
            <?php
            } else {
                ?>
                <p>
                    <label>
                        <input name="ht_ctc_othersettings[fb_analytics]" type="checkbox" value="1" id="fb_analytics" />
                        <span><?php _e( 'Facebook Analytics', 'click-to-chat-for-whatsapp' ); ?></span>
                    </label>
                </p>
                <?php
            }
            ?>
            <p class="description"> <?php _e( 'This feature is', 'click-to-chat-for-whatsapp' ); ?> <b><?php _e( 'depreacted', 'click-to-chat-for-whatsapp' ); ?></b> <?php _e( 'in the favor of Facebook Pixel', 'click-to-chat-for-whatsapp' ); ?></p>
            <p class="description"> <?php _e( 'If Facebook Analytics installed - creates an Event there', 'click-to-chat-for-whatsapp' ); ?> - <a target="_blank" href="https://www.holithemes.com/plugins/click-to-chat/facebook-analytics/"><?php _e( 'more info', 'click-to-chat-for-whatsapp' ); ?></a> </p>
            <br><br><br>

            <?php

            // delete options 
            if ( isset( $options['delete_options'] ) ) {
                ?>
                <p>
                    <label>
                        <input name="ht_ctc_othersettings[delete_options]" type="checkbox" value="1" <?php checked( $options['delete_options'], 1 ); ?> id="delete_options"   />
                        <span><?php _e( 'Delete this plugin settings when uninstalls', 'click-to-chat-for-whatsapp' ); ?></span>
                    </label>
                </p>
                <?php
            } else {
                ?>
                <p>
                    <label>
                        <input name="ht_ctc_othersettings[delete_options]" type="checkbox" value="1" id="delete_options"   />
                        <span><?php _e( 'Delete this plugin settings when uninstalls', 'click-to-chat-for-whatsapp' ); ?></span>
                    </label>
                </p>
                <?php
            }

            ?>
            



        </div>
        </li>
        </ul>

        <?php
    }



    

    /**
     * Sanitize each setting field as needed
     *
     * @param array $input Contains all settings fields as array keys
     */
    public function options_sanitize( $input ) {

        if ( ! current_user_can( 'manage_options' ) ) {
            wp_die( 'not allowed to modify - please contact admin ' );
        }

        $new_input = array();

        $add_suffix = array(
            's2_img_size',
            's3_img_size',
            's3_padding',
            's4_img_size',
            's5_img_height',
            's5_img_width',
            's5_content_height',
            's5_content_width',
            's7_icon_size',
            's7_border_size',
            's7_border_radius',
            's8_text_size',
            's8_icon_size',
            's99_desktop_img_height',
            's99_desktop_img_width',
            's99_mobile_img_height',
            's99_mobile_img_width',
        );

        foreach ($input as $key => $value) {
            if( isset( $input[$key] ) ) {

                if ( in_array( $key, $add_suffix ) ) {
                    if ( is_numeric($input[$key]) ) {
                        $input[$key] = $input[$key] . 'px';
                    }
                    if ( 's5_img_height' == $key || 's5_img_width' == $key || 's5_content_height' == $key ) {
                        $input[$key] = ('' == $input[$key]) ? '70px' : $input[$key];
                    }
                    if ( 's5_content_width' == $key ) {
                        $input[$key] = ('' == $input[$key]) ? '270px' : $input[$key];
                    }
                    if ( 's7_icon_size' == $key ) {
                        $input[$key] = ('' == $input[$key]) ? '28px' : $input[$key];
                    }
                    if ( 's7_border_size' == $key ) {
                        $input[$key] = ('' == $input[$key]) ? '12px' : $input[$key];
                    }
                    if ( 's7_border_radius' == $key ) {
                        $input[$key] = ('' == $input[$key]) ? '4px' : $input[$key];
                    }
                    $new_input[$key] = sanitize_text_field( $input[$key] );
                } else {
                    $new_input[$key] = sanitize_text_field( $input[$key] );
                }

            }
        }


        return $new_input;
    }



}

$ht_ctc_admin_customize_styles = new HT_CTC_Admin_Customize_Styles();

add_action('admin_menu', array($ht_ctc_admin_customize_styles, 'menu') );
add_action('admin_init', array($ht_ctc_admin_customize_styles, 'settings') );


endif; // END class_exists check