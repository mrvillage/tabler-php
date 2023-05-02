<?php
require_once('../Icon.php');

class IconHomeCancel extends Icon {
    public static function getName(): string {
        return 'home-cancel';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 19m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M17 21l4 -4" />   <path d="M19 12h2l-9 -9l-9 9h2v7a2 2 0 0 0 2 2h5.5" />   <path d="M9 21v-6a2 2 0 0 1 2 -2h2c.58 0 1.103 .247 1.468 .642" />
        SVG;
    }
}