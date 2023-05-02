<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandGoogleOne extends Icon {
    public static function getName(): string {
        return 'brand-google-one';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 5v13.982a2 2 0 0 0 4 0v-13.982a2 2 0 1 0 -4 0z" />   <path d="M6.63 8.407a2.125 2.125 0 0 0 -.074 2.944c.77 .834 2.051 .869 2.862 .077l4.95 -4.834c.812 -.792 .846 -2.11 .076 -2.945a1.984 1.984 0 0 0 -2.861 -.077l-4.953 4.835z" />
        SVG;
    }
}