<?php
require_once(__DIR__ . '../Icon.php');

class IconScreenShareOff extends Icon {
    public static function getName(): string {
        return 'screen-share-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 12v3a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1v-10a1 1 0 0 1 1 -1h9" />   <path d="M7 20l10 0" />   <path d="M9 16l0 4" />   <path d="M15 16l0 4" />   <path d="M17 8l4 -4m-4 0l4 4" />
        SVG;
    }
}