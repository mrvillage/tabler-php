<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconJumpRope extends \Tabler\Icon {
    public static function getName(): string {
        return 'jump-rope';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 14v-6a3 3 0 1 1 6 0v8a3 3 0 0 0 6 0v-6" />   <path d="M16 3m0 2a2 2 0 0 1 2 -2h0a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h0a2 2 0 0 1 -2 -2z" />   <path d="M4 14m0 2a2 2 0 0 1 2 -2h0a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h0a2 2 0 0 1 -2 -2z" />
        SVG;
    }
}