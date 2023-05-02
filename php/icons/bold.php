<?php
require_once('../Icon.php');

class IconBold extends Icon {
    public static function getName(): string {
        return 'bold';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 5h6a3.5 3.5 0 0 1 0 7h-6z" />   <path d="M13 12h1a3.5 3.5 0 0 1 0 7h-7v-7" />
        SVG;
    }
}