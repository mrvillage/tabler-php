<?php
require_once('../Icon.php');

class IconExposure0 extends Icon {
    public static function getName(): string {
        return 'exposure-0';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 19a4 4 0 0 0 4 -4v-6a4 4 0 1 0 -8 0v6a4 4 0 0 0 4 4z" />
        SVG;
    }
}