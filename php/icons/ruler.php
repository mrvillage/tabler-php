<?php
require_once('../Icon.php');

class IconRuler extends Icon {
    public static function getName(): string {
        return 'ruler';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 4h14a1 1 0 0 1 1 1v5a1 1 0 0 1 -1 1h-7a1 1 0 0 0 -1 1v7a1 1 0 0 1 -1 1h-5a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1" />   <path d="M4 8l2 0" />   <path d="M4 12l3 0" />   <path d="M4 16l2 0" />   <path d="M8 4l0 2" />   <path d="M12 4l0 3" />   <path d="M16 4l0 2" />
        SVG;
    }
}