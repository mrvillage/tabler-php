<?php
require_once(__DIR__ . '/../Icon.php');

class IconBaselineDensitySmall extends Icon {
    public static function getName(): string {
        return 'baseline-density-small';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 3h16" />   <path d="M4 9h16" />   <path d="M4 15h16" />   <path d="M4 21h16" />
        SVG;
    }
}