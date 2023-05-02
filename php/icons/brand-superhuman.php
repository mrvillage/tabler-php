<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandSuperhuman extends Icon {
    public static function getName(): string {
        return 'brand-superhuman';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 12l4 3l-8 7l-8 -7l4 -3" />   <path d="M12 3l-8 6l8 6l8 -6z" />   <path d="M12 15h8" />
        SVG;
    }
}