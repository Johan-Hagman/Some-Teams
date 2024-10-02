<body>
    <main>

        <?php
        require __DIR__ . "/data.php";

        foreach ($teams as $team): ?>

            <article>
                <?= $team['league']; ?>
                <?= $team['uefa-coefficient-ranking']; ?>
                <?= $team['city']; ?>
                <a href="<?= $team['url']; ?>">Website</a>
                <img src="<?= $team['logo']; ?>" alt="Logo">
                <?= $team['group']; ?>
            </article>
        <?php endforeach; ?>

    </main>

</body>