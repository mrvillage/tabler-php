<?php
require_once('../Icon.php');

class IconFishHook extends Icon {
    public static function getName(): string {
        return 'fish-hook';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 9v6a5 5 0 0 1 -10 0v-4l3 3" />   <path d="M16 7m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M16 5v-2" />
        SVG;
    }
}