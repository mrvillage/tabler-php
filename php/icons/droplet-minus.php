<?php
require_once(__DIR__ . '/../Icon.php');

class IconDropletMinus extends Icon {
    public static function getName(): string {
        return 'droplet-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18.946 15.083a6.538 6.538 0 0 0 -.882 -4.206l-4.89 -7.26c-.42 -.625 -1.287 -.803 -1.936 -.397a1.376 1.376 0 0 0 -.41 .397l-4.893 7.26c-1.695 2.838 -1.035 6.441 1.567 8.546a7.163 7.163 0 0 0 5.089 1.555" />   <path d="M16 19h6" />
        SVG;
    }
}