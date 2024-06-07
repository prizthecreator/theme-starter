<?php

/**
 * Carbon Fields.
 * 
 * @package ThemeStarter
 */

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'themestarter_carbon_fields');
function themestarter_carbon_fields()
{
    // Main Container
    $main_container = Container::make('theme_options', __('Theme Starter Settings'))
        ->set_page_menu_title('Theme Starter')
        ->set_page_menu_position(60)
        ->set_icon('dashicons-cover-image');

    // Footer Locations Group
    $main_container->add_fields(array(
        Field::make('separator', 'footer_locations_separator', 'Footer Menu Locations Title'),
        Field::make('text', 'themestarter_footer_location_1_title', 'Footer Menu Location 1 Title'),
        Field::make('text', 'themestarter_footer_location_2_title', 'Footer Menu Location 2 Title'),
        Field::make('text', 'themestarter_footer_location_3_title', 'Footer Menu Location 3 Title'),
        Field::make('text', 'themestarter_footer_location_4_title', 'Footer Menu Location 4 Title'),
    ));

    // Contact Information Group
    $main_container->add_fields(array(
        Field::make('separator', 'contact_information_separator', 'Contact Information'),
        Field::make('text', 'themestarter_email', 'Contact Email'),
        Field::make('text', 'themestarter_phone', 'Company Phone'),
    ));

    // Social Media Profiles Group
    $main_container->add_fields(array(
        Field::make('separator', 'social_media_profiles_separator', 'Social Media Profiles'),
        Field::make('complex', 'themestarter_socials', 'Social Media Profiles')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('select', 'platform', 'Platform')
                    ->set_options(array(
                        'behance' => 'Behance',
                        'discord' => 'Discord',
                        'dribbble' => 'Dribbble',
                        'facebook' => 'Facebook',
                        'github' => 'GitHub',
                        'gitlab' => 'GitLab',
                        'instagram' => 'Instagram',
                        'line' => 'Line',
                        'linkedin' => 'LinkedIn',
                        'mastodon' => 'Mastodon',
                        'medium' => 'Medium',
                        'messenger' => 'Messenger',
                        'opencollective' => 'OpenCollective',
                        'pinterest' => 'Pinterest',
                        'quora' => 'Quora',
                        'reddit' => 'Reddit',
                        'signal' => 'Signal',
                        'sina-weibo' => 'Sina Weibo',
                        'skype' => 'Skype',
                        'slack' => 'Slack',
                        'snapchat' => 'Snapchat',
                        'strava' => 'Strava',
                        'substack' => 'Substack',
                        'telegram' => 'Telegram',
                        'tencent-qq' => 'Tencent QQ',
                        'threads' => 'Threads',
                        'tiktok' => 'TikTok',
                        'twitch' => 'Twitch',
                        'twitter-x' => 'Twitter/X',
                        'vimeo' => 'Vimeo',
                        'wechat' => 'WeChat',
                        'whatsapp' => 'WhatsApp',
                        'yelp' => 'Yelp',
                        'youtube' => 'YouTube',
                    )),
                Field::make('text', 'url', 'URL')
                    ->set_attribute('placeholder', 'Enter profile URL'),
            )),
    ));

    // Contact Card Group
    $main_container->add_fields(array(
        Field::make('separator', 'contact_card_separator', 'Contact Card'),
        Field::make('text', 'themestarter_contact_card_heading', 'Contact Contact Card Heading'),
        Field::make('text', 'themestarter_contact_card_subheading', 'Contact Contact Card Subheading'),
    ));


    define('THEMESTARTER_EMAIL', carbon_get_theme_option('themestarter_email') ?: 'info@company.com');
    define('THEMESTARTER_PHONE', carbon_get_theme_option('themestarter_phone') ?: '123-456-7890');
    define('THEMESTARTER_SOCIALS', carbon_get_theme_option('themestarter_socials') ?: []);
    define('THEMESTARTER_CONTACT_CARD_HEADING', carbon_get_theme_option('themestarter_contact_card_heading') ?: 'Seeking a powerful WordPress theme?');
    define('THEMESTARTER_CONTACT_CARD_SUBHEADING', carbon_get_theme_option('tthemestarter_contact_card_subheading') ?: 'Download Theme Starter - Theme to discover the fun and powerful way of building complex UIs and modern WordPress sites.');
}

add_action('after_setup_theme', 'themestarter_load');
function themestarter_load()
{
    require_once(get_stylesheet_directory() . '/vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}
