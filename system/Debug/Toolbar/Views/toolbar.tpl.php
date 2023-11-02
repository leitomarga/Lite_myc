<?php
/**
 * @var \CodeIgniter\Debug\Toolbar $this
 * @var int                        $totalTime
 * @var int                        $totalMemory
 * @var string                     $url
 * @var string                     $method
 * @var bool                       $isAJAX
 * @var int                        $startTime
 * @var int                        $totalTime
 * @var int                        $totalMemory
 * @var float                      $segmentDuration
 * @var int                        $segmentCount
 * @var string                     $CI_VERSION
 * @var array                      $collectors
 * @var array                      $vars
 * @var array                      $styles
 * @var \CodeIgniter\View\Parser   $parser
 */
?>
<style>
    <?= preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . '/toolbar.css')) ?>
</style>

<script id="toolbar_js">
    <?= file_get_contents(__DIR__ . '/toolbar.js') ?>
</script>
<!--<div id="debug-icon" class="debug-bar-ndisplay">
    <a id="debug-icon-link" href="javascript:void(0)">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 155 200"><defs/><path fill="#dd4814" d="M73.7 3.7c2.2 7.9-.7 18.5-7.8 29-1.8 2.6-10.7 12.2-19.7 21.3-23.9 24-33.6 37.1-40.3 54.4-7.9 20.6-7.8 40.8.5 58.2C12.8 180 27.6 193 42.5 198l6 2-3-2.2c-21-15.2-22.9-38.7-4.8-58.8 2.5-2.7 4.8-5 5.1-5 .4 0 .7 2.7.7 6.1 0 5.7.2 6.2 3.7 9.5 3 2.7 4.6 3.4 7.8 3.4 5.6 0 9.9-2.4 11.6-6.5 2.9-6.9 1.6-12-5-20.5-10.5-13.4-11.7-23.3-4.3-34.7l3.1-4.8.7 4.7c1.3 8.2 5.8 12.9 25 25.8 20.9 14.1 30.6 26.1 32.8 40.5 1.1 7.2-.1 16.1-3.1 21.8-2.7 5.3-11.2 14.3-16.5 17.4-2.4 1.4-4.3 2.6-4.3 2.8 0 .2 2.4-.4 5.3-1.4 24.1-8.3 42.7-27.1 48.2-48.6 1.9-7.6 1.9-20.2-.1-28.5-3.5-15.2-14.6-30.5-29.9-41.2l-7-4.9-.6 3.3c-.8 4.8-2.6 7.6-5.9 9.3-4.5 2.3-10.3 1.9-13.8-1-6.7-5.7-7.8-14.6-3.7-30.5 3-11.6 3.2-20.6.5-29.1C88.3 18 80.6 6.3 74.8 2.2 73.1.9 73 1 73.7 3.7z"/></svg>
    </a>
</div> -->

<style>
<?php foreach ($styles as $name => $style): ?>
<?= sprintf(".%s { %s }\n", $name, $style) ?>
<?php endforeach ?>
</style>
