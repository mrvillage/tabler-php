<?php
require_once(__DIR__ . '/../Icon.php');

class IconStereoGlasses extends Icon {
    public static function getName(): string {
        return 'stereo-glasses';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 3h-2l-3 9" />   <path d="M16 3h2l3 9" />   <path d="M3 12v7a1 1 0 0 0 1 1h4.586a1 1 0 0 0 .707 -.293l2 -2a1 1 0 0 1 1.414 0l2 2a1 1 0 0 0 .707 .293h4.586a1 1 0 0 0 1 -1v-7h-18z" />   <path d="M7 16h1" />   <path d="M16 16h1" />
        SVG;
    }
}