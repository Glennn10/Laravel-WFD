<h1>Data Author</h1>
<p class="lead">Daftar penulis buku yang tersedia.</p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Bio</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($authors as $author): ?>
            <tr>
                <td><?= $author['id'] ?></td>
                <td><?= htmlspecialchars($author['name']) ?></td>
                <td class="muted"><?= htmlspecialchars($author['photo']) ?></td>
                <td><?= htmlspecialchars($author['bio']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
