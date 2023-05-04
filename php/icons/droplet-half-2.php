<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDropletHalf2 extends Tabler\Icon {
    public static function getName(): string {
        return 'droplet-half-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6.8 11a6 6 0 1 0 10.396 0l-5.197 -8l-5.2 8z" />   <path d="M6 14h12" />
        SVG;
    }
}