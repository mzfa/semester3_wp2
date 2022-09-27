<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->load->view('_partial/head') ?>
</head>
<body>
    <?= $this->load->view('_partial/navbar') ?>
    <h1>List Article</h1>
    <ul>
        <?php foreach ($articles as $article) :?>
            <li><?= $article['title'] ?></li>
        <?php endforeach; ?>
    </ul>
    <?= $this->load->view('_partial/footer') ?>
</body>
</html>