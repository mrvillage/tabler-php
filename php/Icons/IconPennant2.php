<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPennant2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'pennant-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 21h-4" />   <path d="M14 21v-18" />   <path d="M14 4l-9 4l9 4" />
        SVG;
    }
}