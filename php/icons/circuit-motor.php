<?php
require_once('../Icon.php');

class IconCircuitMotor extends Icon {
    public static function getName(): string {
        return 'circuit-motor';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />   <path d="M5 12h-3" />   <path d="M19 12h3" />   <path d="M10 14v-4l2 2l2 -2v4" />
        SVG;
    }
}