<?php
require_once(__DIR__ . '../Icon.php');

class IconPhysotherapist extends Icon {
    public static function getName(): string {
        return 'physotherapist';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 15l-1 -3l4 -2l4 1h3.5" />   <path d="M4 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M12 6m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M12 17v-7" />   <path d="M8 20h7l1 -4l4 -2" />   <path d="M18 20h3" />
        SVG;
    }
}