<?php
require_once(__DIR__ . '../Icon.php');

class IconWorldQuestion extends Icon {
    public static function getName(): string {
        return 'world-question';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.975 11.33a9 9 0 1 0 -5.673 9.043" />   <path d="M3.6 9h16.8" />   <path d="M3.6 15h9.9" />   <path d="M11.5 3a17 17 0 0 0 0 18" />   <path d="M12.5 3a16.988 16.988 0 0 1 2.57 9.518m-1.056 5.403a17 17 0 0 1 -1.514 3.079" />   <path d="M19 22v.01" />   <path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
        SVG;
    }
}