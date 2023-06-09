<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowRampLeft2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-ramp-left-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 3v8.707" />   <path d="M8 14l-4 -4l4 -4" />   <path d="M18 21c0 -6.075 -4.925 -11 -11 -11h-3" />
        SVG;
    }
}