<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCane extends Icon {
    public static function getName(): string {
        return 'cane';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 21l6.324 -11.69c.54 -.974 1.756 -4.104 -1.499 -5.762c-3.255 -1.657 -5.175 .863 -5.825 2.032" />
        SVG;
    }
}