<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWindsock extends \Tabler\Icon {
    public static function getName(): string {
        return 'windsock';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 3v18" />   <path d="M6 11l12 -1v-4l-12 -1" />   <path d="M10 5.5v5" />   <path d="M14 6v4" />   <path d="M4 21h4" />
        SVG;
    }
}