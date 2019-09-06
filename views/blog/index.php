<h1>Blog</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Country </th>
        <th scope="col">Short </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $id => $post) : ?>
        <tr>
            <th scope="row"><?= $post['country'] ?></th>
            <td><a href="/blog/post/<?= $id ?>"><?= $post['short'] ?></a></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
