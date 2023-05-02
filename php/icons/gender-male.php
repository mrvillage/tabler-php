<?php
require_once('../Icon.php');

class IconGenderMale extends Icon {
    public static function getName(): string {
        return 'gender-male';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 14m-5 0a5 5 0 1 0 10 0a5 5 0 1 0 -10 0" />   <path d="M19 5l-5.4 5.4" />   <path d="M19 5h-5" />   <path d="M19 5v5" />
        SVG;
    }
}