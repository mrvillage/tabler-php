<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowWaveRightDown extends Icon {
    public static function getName(): string {
        return 'arrow-wave-right-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 14h4v-4" />   <path d="M3 12c.887 1.284 2.48 2.033 4 2c1.52 .033 3.113 -.716 4 -2s2.48 -2.033 4 -2c1.52 -.033 3 1 4 2l2 2" />
        SVG;
    }
}