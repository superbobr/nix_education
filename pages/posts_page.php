<?php include '../components/header.php'; ?>
<?php include '../components/navigation.php'; ?>

<main>
    <h2>Список постов</h2>
    <?php
    $posts = include '../data/posts.php';
    if (!empty($posts)): ?>
        <ul class="post-list">
            <?php foreach ($posts as $post): ?>
                <li class="post-item">
                    <h3><?= htmlspecialchars($post['title']) ?></h3>
                    <p><strong>Автор:</strong> <?= htmlspecialchars($post['author']) ?></p>
                    <p><strong>Дата:</strong> <?= htmlspecialchars($post['date']) ?></p>
                    <p><?= htmlspecialchars($post['content']) ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Пости відсутні.</p>
    <?php endif; ?>
</main>

<?php include '../components/footer.php'; ?>