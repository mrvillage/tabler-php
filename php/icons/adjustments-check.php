<?php
require_once(__DIR__ . '/../Icon.php');

class IconAdjustmentsCheck extends Icon {
    public static function getName(): string {
        return 'adjustments-check';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 10a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M6 4v4" />   <path d="M6 12v8" />   <path d="M13.823 15.176a2 2 0 1 0 -2.638 2.651" />   <path d="M12 4v10" />   <path d="M16 7a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M18 4v1" />   <path d="M18 9v5" />   <path d="M15 19l2 2l4 -4" />
        SVG;
    }
}