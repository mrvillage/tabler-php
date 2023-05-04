<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowBackUp extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-back-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 14l-4 -4l4 -4" />   <path d="M5 10h11a4 4 0 1 1 0 8h-1" />
        SVG;
    }
}