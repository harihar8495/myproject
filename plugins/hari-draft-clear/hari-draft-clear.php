<?php

/**
 * Plugin Name:Draft-clear-plugin
 * Plugin URI:http://localhost:8000
 * Version:1.0.0
 * Description:plugin to clear draft post
 * Author:Ram
 * Author URI:http://localhost:8000
 * License :GPL or later
 */
class DraftPost
{
    function __construct()
    {
        add_action('admin_menu', array($this, 'test'));


        add_action('hari_cron_hooks', array($this,'hari_clear_draft_post'));


    }

    function test()
    {

        add_menu_page('Draft clear',//page title
            'Draft clear',// menu title
            'manage_options',// capability
            'Draft clear',//menu slug
            array($this, 'hari_clear_draft_post'));

    }

    public function hari_clear_draft_post()
    {

          wp_schedule_event(strtotime('7.13am today'), 'daily', 'my_cron_hook');

          add_action( 'my_cron_hook', array($this,'clear_draft_daily'));

    }
    public function clear_draft_daily(){
        $my_posts = get_posts( array( 'draft' => -1 ) );

        wp_delete_post($my_posts, true);

    }
}

new DraftPost();