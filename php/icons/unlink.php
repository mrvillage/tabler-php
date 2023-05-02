<?php
require_once(__DIR__ . '/../Icon.php');

class IconUnlink extends Icon {
    public static function getName(): string {
        return 'unlink';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 22v-2" />   <path d="M9 15l6 -6" />   <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />   <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />   <path d="M20 17h2" />   <path d="M2 7h2" />   <path d="M7 2v2" />
        SVG;
    }
}