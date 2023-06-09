<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandDaysCounter extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-days-counter';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.779 10.007a9 9 0 1 0 -10.77 10.772" />   <path d="M13 21h8v-7" />   <path d="M12 8v4l3 3" />
        SVG;
    }
}