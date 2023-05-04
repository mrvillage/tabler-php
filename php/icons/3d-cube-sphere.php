<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class Icon3dCubeSphere extends Icon {
    public static function getName(): string {
        return '3d-cube-sphere';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 17.6l-2 -1.1v-2.5" />   <path d="M4 10v-2.5l2 -1.1" />   <path d="M10 4.1l2 -1.1l2 1.1" />   <path d="M18 6.4l2 1.1v2.5" />   <path d="M20 14v2.5l-2 1.12" />   <path d="M14 19.9l-2 1.1l-2 -1.1" />   <path d="M12 12l2 -1.1" />   <path d="M18 8.6l2 -1.1" />   <path d="M12 12l0 2.5" />   <path d="M12 18.5l0 2.5" />   <path d="M12 12l-2 -1.12" />   <path d="M6 8.6l-2 -1.1" />
        SVG;
    }
}