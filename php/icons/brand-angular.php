<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandAngular extends Icon {
    public static function getName(): string {
        return 'brand-angular';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5.428 17.245l6.076 3.471a1 1 0 0 0 .992 0l6.076 -3.471a1 1 0 0 0 .495 -.734l1.323 -9.704a1 1 0 0 0 -.658 -1.078l-7.4 -2.612a1 1 0 0 0 -.665 0l-7.399 2.613a1 1 0 0 0 -.658 1.078l1.323 9.704a1 1 0 0 0 .495 .734z" />   <path d="M9 15l3 -8l3 8" />   <path d="M10 13h4" />
        SVG;
    }
}