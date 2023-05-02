<?php
require_once('../Icon.php');

class IconLadder extends Icon {
    public static function getName(): string {
        return 'ladder';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 3v18" />   <path d="M16 3v18" />   <path d="M8 14h8" />   <path d="M8 10h8" />   <path d="M8 6h8" />   <path d="M8 18h8" />
        SVG;
    }
}