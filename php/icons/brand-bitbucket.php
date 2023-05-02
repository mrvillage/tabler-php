<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandBitbucket extends Icon {
    public static function getName(): string {
        return 'brand-bitbucket';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3.648 4a.64 .64 0 0 0 -.64 .744l3.14 14.528c.07 .417 .43 .724 .852 .728h10a.644 .644 0 0 0 .642 -.539l3.35 -14.71a.641 .641 0 0 0 -.64 -.744l-16.704 -.007z" />   <path d="M14 15h-4l-1 -6h6z" />
        SVG;
    }
}