<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWiperWash extends Tabler\Icon {
    public static function getName(): string {
        return 'wiper-wash';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 20m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M3 11l5.5 5.5a5 5 0 0 1 7 0l5.5 -5.5a12 12 0 0 0 -18 0" />   <path d="M12 20l0 -14" />   <path d="M4 6a4 4 0 0 1 .4 -1.8" />   <path d="M7 2.1a4 4 0 0 1 2 0" />   <path d="M12 6a4 4 0 0 0 -.4 -1.8" />   <path d="M12 6a4 4 0 0 1 .4 -1.8" />   <path d="M15 2.1a4 4 0 0 1 2 0" />   <path d="M20 6a4 4 0 0 0 -.4 -1.8" />
        SVG;
    }
}