<?php
require_once(__DIR__ . '/../Icon.php');

class IconUsersGroup extends Icon {
    public static function getName(): string {
        return 'users-group';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />   <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M17 10h2a2 2 0 0 1 2 2v1" />   <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
        SVG;
    }
}