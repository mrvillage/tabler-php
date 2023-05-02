<?php
require_once(__DIR__ . '/../Icon.php');

class IconRotateDot extends Icon {
    public static function getName(): string {
        return 'rotate-dot';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19.95 11a8 8 0 1 0 -.5 4m.5 5v-5h-5" />   <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
        SVG;
    }
}