<?php
require_once('../Icon.php');

class IconPigOff extends Icon {
    public static function getName(): string {
        return 'pig-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 11v.01" />   <path d="M10 6h1.499l4.5 -3l0 3.803a6.019 6.019 0 0 1 2.658 3.197h1.341a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-1.342c-.057 .16 -.12 .318 -.19 .472m-1.467 2.528v1.5a1.5 1.5 0 0 1 -3 0v-.583a6.04 6.04 0 0 1 -1 .083h-4a6.04 6.04 0 0 1 -1 -.083v.583a1.5 1.5 0 0 1 -3 0v-2l0 -.027a6 6 0 0 1 1.5 -9.928" />   <path d="M3 3l18 18" />
        SVG;
    }
}