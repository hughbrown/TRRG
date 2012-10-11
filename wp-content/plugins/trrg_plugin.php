<?php
error_reporting(E_ALL);
/*
 Plugin Name: The Referral Resource Guide Plugin
 Plugin URI: http://www.thereferralresourceguide.com
 Description: Plugin Helpers
 Version: 1.0
 Author: Kirdric Hill
 Author URL: http://kirdricthecoder.com
*/

class TRRG_Messager extends WP_Widget {

    function __construct()
    {
        $params = array(
            'description' => 'Widget description',
            'name' => 'TRRG Messager'
        );
        parent::__construct('TRRG_Messager', '', $params);
    }

    public function form($instance)
    {
        extract($instance);
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title');?>">Title: </label>
            <input
                class="widefat"
                id="<?php echo $this->get_field_id('title');?>"
                name="<?php echo $this->get_field_name('title');?>"
                value="<?php if (isset($title)) echo esc_attr($title); ?>"
        </p>
         <?php
    }

    public function widget($args,$instance)
    {
        extract($args);
        extract($instance);
        echo $before_widget;
        echo $before_title . $title . $after_title;
        echo $after_widget;
    }

}

add_action('widgets_init', 'trrg_register_trrg_messager');
function trrg_register_trrg_messager()
{
    register_widget('TRRG_Messager');
}