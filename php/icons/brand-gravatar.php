<?php
require_once('../Icon.php');

class IconBrandGravatar extends Icon {
    public static function getName(): string {
        return 'brand-gravatar';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5.64 5.632a9 9 0 1 0 6.36 -2.632v7.714" />
        SVG;
    }
}