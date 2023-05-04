<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconUserCheck extends Icon {
    public static function getName(): string {
        return 'user-check';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />   <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />   <path d="M15 19l2 2l4 -4" />
        SVG;
    }
}