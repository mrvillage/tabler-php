<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandGooglePhotos extends Icon {
    public static function getName(): string {
        return 'brand-google-photos';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7.5 7c2.485 0 4.5 1.974 4.5 4.409v.591h-8.397a.61 .61 0 0 1 -.426 -.173a.585 .585 0 0 1 -.177 -.418c0 -2.435 2.015 -4.409 4.5 -4.409z" />   <path d="M16.5 17c-2.485 0 -4.5 -1.974 -4.5 -4.409v-.591h8.397c.333 0 .603 .265 .603 .591c0 2.435 -2.015 4.409 -4.5 4.409z" />   <path d="M7 16.5c0 -2.485 1.972 -4.5 4.405 -4.5h.595v8.392a.61 .61 0 0 1 -.173 .431a.584 .584 0 0 1 -.422 .177c-2.433 0 -4.405 -2.015 -4.405 -4.5z" />   <path d="M17 7.5c0 2.485 -1.972 4.5 -4.405 4.5h-.595v-8.397a.61 .61 0 0 1 .175 -.428a.584 .584 0 0 1 .42 -.175c2.433 0 4.405 2.015 4.405 4.5z" />
        SVG;
    }
}