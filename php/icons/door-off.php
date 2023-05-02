<?php
require_once(__DIR__ . '../Icon.php');

class IconDoorOff extends Icon {
    public static function getName(): string {
        return 'door-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 21h18" />   <path d="M6 21v-15" />   <path d="M7.18 3.175c.25 -.112 .528 -.175 .82 -.175h8a2 2 0 0 1 2 2v9" />   <path d="M18 18v3" />   <path d="M3 3l18 18" />
        SVG;
    }
}