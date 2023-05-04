<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBinary extends \Tabler\Icon {
    public static function getName(): string {
        return 'binary';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 10v-5h-1m8 14v-5h-1" />   <path d="M15 5m0 .5a.5 .5 0 0 1 .5 -.5h2a.5 .5 0 0 1 .5 .5v4a.5 .5 0 0 1 -.5 .5h-2a.5 .5 0 0 1 -.5 -.5z" />   <path d="M10 14m0 .5a.5 .5 0 0 1 .5 -.5h2a.5 .5 0 0 1 .5 .5v4a.5 .5 0 0 1 -.5 .5h-2a.5 .5 0 0 1 -.5 -.5z" />   <path d="M6 10h.01m-.01 9h.01" />
        SVG;
    }
}