<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconZodiacTaurus extends Tabler\Icon {
    public static function getName(): string {
        return 'zodiac-taurus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 3a6 6 0 0 0 12 0" />   <path d="M12 15m-6 0a6 6 0 1 0 12 0a6 6 0 1 0 -12 0" />
        SVG;
    }
}