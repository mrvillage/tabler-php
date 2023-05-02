<?php
require_once(__DIR__ . '/../Icon.php');

class IconDoor extends Icon {
    public static function getName(): string {
        return 'door';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 12v.01" />   <path d="M3 21h18" />   <path d="M6 21v-16a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v16" />
        SVG;
    }
}