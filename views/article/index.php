<h1>Article</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">article</th>
        <th scope="col">Title</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($articles as $id => $article) : ?>
        <tr>
            <th scope="row"><?= $article['article'] ?></th>
            <td><a href="/article/article/<?= $id ?>"><?= $article['title'] ?></a></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
