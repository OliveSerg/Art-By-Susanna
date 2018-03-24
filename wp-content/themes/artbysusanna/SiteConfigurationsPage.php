<?php

class SiteConfigurationsPage
{
    private $options;

    public function __construct()
    {
        add_action('admin_menu', [$this, 'add_settings_page']);
        add_action('admin_init', [$this, 'page_init']);
    }

    public function add_settings_page()
    {
        add_options_page(
            'Site Configurations',
            'Site Configurations',
            'manage_options',
            'site-configurations',
            [$this, 'create_admin_page']
        );
    }

    public function create_admin_page()
    {
        $this->options = get_option('site_configurations'); ?>
    <div class="wrap">
        <h2>Site Configurations</h2>
        <form method="post" action="options.php">
            <?php
            settings_fields('site_configurations_group');
        do_settings_sections('site-configurations');
        submit_button(); ?>
        </form>
    </div>
    <?php
    }

    public function page_init()
    {
        register_setting(
            'site_configurations_group',
            'site_configurations',
            [$this, 'sanitize']
        );

        add_settings_section(
            'site_configurations_section',
            'Site Configurations',
            [$this, 'site_configurations_section'],
            'site-configurations'
        );

        add_settings_field(
            'contact_email',
            'Contact Email',
            [$this, 'contact_email_html'],
            'site-configurations',
            'site_configurations_section'
        );

        add_settings_field(
            'contact_phone',
            'Contact Phone Number',
            [$this, 'contact_phone_html'],
            'site-configurations',
            'site_configurations_section'
        );
    }

    public function sanitize($input)
    {
        $sanitized_input= [];
        if (isset($input['contact_email'])) {
            $sanitized_input['contact_email'] = sanitize_text_field($input['contact_email']);
        }

        if (isset($input['contact_phone'])) {
            $sanitized_input['contact_phone'] = sanitize_text_field($input['contact_phone']);
        }

        return $sanitized_input;
    }

    public function site_configurations_section()
    {
        print('Some text');
    }

    public function contact_email_html()
    {
        printf(
            '<input type="email" id="contact_email" name="site_configurations[contact_email]" value="%s" />',
            isset($this->options['contact_email']) ? esc_attr($this->options['contact_email']) : ''
        );
    }

    public function contact_phone_html()
    {
        printf(
            '<input type="phone" id="contact_phone" name="site_configurations[contact_phone]" value="%s" />',
            isset($this->options['contact_phone']) ? esc_attr($this->options['contact_phone']) : ''
        );
    }
}
