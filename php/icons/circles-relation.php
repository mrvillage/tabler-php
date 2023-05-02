<?php
require_once('../Icon.php');

class IconCirclesRelation extends Icon {
    public static function getName(): string {
        return 'circles-relation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9.183 6.117a6 6 0 1 0 4.511 3.986" />   <path d="M14.813 17.883a6 6 0 1 0 -4.496 -3.954" />
        SVG;
    }
}