<?php
require_once('../Icon.php');

class IconVolume extends Icon {
    public static function getName(): string {
        return 'volume';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 8a5 5 0 0 1 0 8" />   <path d="M17.7 5a9 9 0 0 1 0 14" />   <path d="M6 15h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l3.5 -4.5a.8 .8 0 0 1 1.5 .5v14a.8 .8 0 0 1 -1.5 .5l-3.5 -4.5" />
        SVG;
    }
}