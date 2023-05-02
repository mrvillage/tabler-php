<?php
require_once('../Icon.php');

class IconBrandMyOppo extends Icon {
    public static function getName(): string {
        return 'brand-my-oppo';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18.316 5h-12.632l-3.418 4.019a1.089 1.089 0 0 0 .019 1.447l9.714 10.534l9.715 -10.49a1.09 1.09 0 0 0 .024 -1.444l-3.422 -4.066z" />   <path d="M9 11l3 3l3 -3" />
        SVG;
    }
}