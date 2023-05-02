<?php
require_once('../Icon.php');

class IconAugmentedReality2 extends Icon {
    public static function getName(): string {
        return 'augmented-reality-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 21h-2a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v3.5" />   <path d="M17 17l-4 -2.5l4 -2.5l4 2.5v4.5l-4 2.5z" />   <path d="M13 14.5v4.5l4 2.5" />   <path d="M17 17l4 -2.5" />   <path d="M11 4h2" />
        SVG;
    }
}