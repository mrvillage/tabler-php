<?php
require_once(__DIR__ . '/../Icon.php');

class IconLetterM extends Icon {
    public static function getName(): string {
        return 'letter-m';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 20v-16l6 14l6 -14v16" />
        SVG;
    }
}