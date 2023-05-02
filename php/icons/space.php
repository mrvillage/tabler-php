<?php
require_once('../Icon.php');

class IconSpace extends Icon {
    public static function getName(): string {
        return 'space';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 10v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1 -1v-3" />
        SVG;
    }
}