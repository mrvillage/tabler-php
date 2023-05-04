<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowRampRight3 extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-ramp-right-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 3v6" />   <path d="M16 16l4 -4l-4 -4" />   <path d="M6 21v-6a3 3 0 0 1 3 -3h11" />
        SVG;
    }
}