<?php
require_once('../Icon.php');

class IconBaselineDensityLarge extends Icon {
    public static function getName(): string {
        return 'baseline-density-large';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4h16" />   <path d="M4 20h16" />
        SVG;
    }
}