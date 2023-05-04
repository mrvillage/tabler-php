<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMountain extends Icon {
    public static function getName(): string {
        return 'mountain';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 20h18l-6.921 -14.612a2.3 2.3 0 0 0 -4.158 0l-6.921 14.612z" />   <path d="M7.5 11l2 2.5l2.5 -2.5l2 3l2.5 -2" />
        SVG;
    }
}