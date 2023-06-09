<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBoxAlignLeft extends \Tabler\Icon {
    public static function getName(): string {
        return 'box-align-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9.752 19.753v-16h-5a1 1 0 0 0 -1 1v14a1 1 0 0 0 1 1h5z" />   <path d="M14.752 19.753h-.01" />   <path d="M19.753 19.753h-.011" />   <path d="M19.753 14.752h-.011" />   <path d="M19.753 8.752h-.011" />   <path d="M19.753 3.752h-.011" />   <path d="M14.752 3.752h-.01" />
        SVG;
    }
}