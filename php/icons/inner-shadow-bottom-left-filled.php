<?php
require_once(__DIR__ . '/../Icon.php');

class IconInnerShadowBottomLeftFilled extends Icon {
    public static function getName(): string {
        return 'inner-shadow-bottom-left-filled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 2c5.523 0 10 4.477 10 10s-4.477 10 -10 10s-10 -4.477 -10 -10s4.477 -10 10 -10zm-6 9a1 1 0 0 0 -1 1a7 7 0 0 0 7 7a1 1 0 0 0 0 -2a5 5 0 0 1 -5 -5a1 1 0 0 0 -1 -1z" stroke-width="0" fill="currentColor" />
        SVG;
    }
}