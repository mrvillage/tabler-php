<?php
require_once(__DIR__ . '../Icon.php');

class IconShapeOff extends Icon {
    public static function getName(): string {
        return 'shape-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3.575 3.597a2 2 0 0 0 2.849 2.808" />   <path d="M19 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M17.574 17.598a2 2 0 0 0 2.826 2.83" />   <path d="M5 7v10" />   <path d="M9 5h8" />   <path d="M7 19h10" />   <path d="M19 7v8" />   <path d="M3 3l18 18" />
        SVG;
    }
}