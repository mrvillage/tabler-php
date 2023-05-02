<?php
require_once(__DIR__ . '/../Icon.php');

class IconWashDryW extends Icon {
    public static function getName(): string {
        return 'wash-dry-w';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M8 8l1.5 8h1l1.5 -6l1.5 6h1l1.5 -8" />
        SVG;
    }
}