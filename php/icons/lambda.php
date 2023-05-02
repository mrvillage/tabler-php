<?php
require_once('../Icon.php');

class IconLambda extends Icon {
    public static function getName(): string {
        return 'lambda';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 20l6.5 -9" />   <path d="M19 20c-6 0 -6 -16 -12 -16" />
        SVG;
    }
}