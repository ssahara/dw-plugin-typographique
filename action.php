<?php
/**
 * DokuWiki Plugin Typographique; Action component
 *
 */

if(!defined('DOKU_INC')) die();
if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'action.php');

class action_plugin_typographique extends DokuWiki_Action_Plugin {

    /**
     * register the event handlers
     */
    public function register(Doku_Event_Handler $controller) {
        $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'fontColorToolbar', array());
        $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'fontSizeToolbar', array());
    }

    /**
     * Adds FontColor toolbar button
     * @see https://www.dokuwiki.org/plugin:fontcolor
     */
    public function fontColorToolbar(Doku_Event &$event, $param) {
        $colors = array(
            'Yellow' => '#ffff00',
            'Red' => '#ff0000',
            'Orange' => '#ffa500',
            'Salmon' => '#fa8072',
            'Pink' => '#ffc0cb',
            'Plum' => '#dda0dd',
            'Purple' => '#800080',
            'Fuchsia' => '#ff00ff',
            'Silver' => '#c0c0c0',
            'Aqua' => '#00ffff',
            'Teal' => '#008080',
            'Cornflower' => '#6495ed',
            'Sky Blue' => '#87ceeb',
            'Aquamarine' => '#7fffd4',
            'Pale Green' => '#98fb98',
            'Lime' => '#00ff00',
            'Green' => '#008000',
            'Olive' => '#808000',
            'Indian Red' => '#cd5c5c',
            'Khaki' => '#f0e68c',
            'Powder Blue' => '#b0e0e6',
            'Sandy Brown' => '#f4a460',
            'Steel Blue' => '#4682b4',
            'Thistle' => '#d8bfd8',
            'Yellow Green' => '#9acd32',
            'Dark Violet' => '#9400d3',
            'Maroon' => '#800000'
        );

        $button = array(
                'type'  => 'picker',
                'title' => $this->getLang('fc_picker'),
                'icon'  => '../../plugins/typographique/images/fontcolor/picker.png',
                'list'  => array()
        );
        foreach ($colors as $colorName => $colorValue) {
            $button['list'][] = array(
                'type'  => 'format',
                'title' => $colorName,
                'icon'  => '../../plugins/typographique/images/fontcolor/color-icon.php?color='
                           .substr($colorValue, 1),
                'open'  => '<fc ' . $colorValue . '>',
                'close' => '</fc>'
            );
        }
        $event->data[] = $button;
    }


    /**
     * Adds FontSize toolbar button
     * @see https://www.dokuwiki.org/plugin:fontsize2
     */
    public function fontSizeToolbar(Doku_Event &$event, $param) {
        $options = array(
            'xxs'     => 'xx-small',
            'xs'      =>  'x-small',
            's'       =>    'small',
            'm'       =>   'medium',
            'l'       =>    'large',
            'xl'      =>  'x-large',
            'xxl'     => 'xx-large',
            'smaller' =>  'smaller',
            'larger'  =>   'larger'
        );

        $button = array(
                'type' => 'picker',
                'title' => $this->getLang('fs_picker'),
                'icon' => '../../plugins/typographique/images/fontsize/picker.png',
                'list' => array()
        );
        foreach ($options as $sizeName => $sizeValue) {
            $button['list'][] = array(
                'type'  => 'format',
                'title'  => $this->getLang('fs_'.$sizeName),
                'sample' => $this->getLang('fs_'.$sizeName.'_sample'),
                'icon'   => '../../plugins/typographique/images/fontsize/'.$sizeName.'.png',
                'open'   => '<fs '.$sizeValue.'>',
                'close'  => '</fs>',
            );
        }
        $event->data[] = $button;
    }

}

