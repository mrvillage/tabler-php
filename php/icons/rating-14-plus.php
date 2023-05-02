<?php
require_once(__DIR__ . '../Icon.php');

class IconRating14Plus extends Icon {
    public static function getName(): string {
        return 'rating-14-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M7 15v-6" />   <path d="M15.5 12h3" />   <path d="M17 10.5v3" />   <path d="M12.5 15v-6m-2.5 0v4h3" />
        SVG;
    }
}