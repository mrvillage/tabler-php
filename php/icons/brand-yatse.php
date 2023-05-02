<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandYatse extends Icon {
    public static function getName(): string {
        return 'brand-yatse';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 3l5 2.876v5.088l4.197 -2.73l4.803 2.731l-9.281 5.478l-2.383 1.41l-2.334 1.377l-3 1.77v-5.565l3 -1.771z" />
        SVG;
    }
}