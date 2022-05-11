<?php
require $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . '/header.php';

$dir = new FilesystemIterator($_SERVER['DOCUMENT_ROOT'] . '/topics');
$filter = function (SplFileInfo $file): bool { return $file->isFile(); };
$topics = [];
$i = 0;
foreach (new CallbackFilterIterator($dir, $filter) as $file) {
    $topics[$i] = $file->getFilename();
    $i++;
}
?>
<table class="table">
    <tbody>
        <?php foreach ($topics as $key => $topic) { ?>
        <tr>
            <td>
                <?=$key + 1?>
            </td>
            <td>
                <a href='/topics/<?=$topic?>'><?=$topic?></a>
            <td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
