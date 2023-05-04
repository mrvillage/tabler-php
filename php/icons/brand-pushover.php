<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandPushover extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-pushover';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6.16 10.985c-.83 -1.935 1.53 -7.985 8.195 -7.985c3.333 0 4.645 1.382 4.645 3.9c0 2.597 -2.612 6.1 -9 6.1" />   <path d="M12.5 6l-5.5 15" />
        SVG;
    }
}