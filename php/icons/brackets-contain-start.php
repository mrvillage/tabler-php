<?php
require_once('../Icon.php');

class IconBracketsContainStart extends Icon {
    public static function getName(): string {
        return 'brackets-contain-start';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 4h-4v16h4" />   <path d="M18 16h-.01" />   <path d="M14 16h-.01" />   <path d="M10 16h-.01" />
        SVG;
    }
}