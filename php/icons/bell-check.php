<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBellCheck extends Icon {
    public static function getName(): string {
        return 'bell-check';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11.5 17h-7.5a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3c.016 .129 .037 .256 .065 .382" />   <path d="M9 17v1a3 3 0 0 0 2.502 2.959" />   <path d="M15 19l2 2l4 -4" />
        SVG;
    }
}