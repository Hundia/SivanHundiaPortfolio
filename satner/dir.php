var files = <?php $out = array();
foreach (glob('img/siv/banners/*.jpg') as $filename) {
    $p = pathinfo($filename);
    $out[] = $p['filename'];
}