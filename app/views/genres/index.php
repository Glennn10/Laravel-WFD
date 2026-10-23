<h1>Data Genre</h1>
<p class="lead">Daftar genre buku yang tersedia.</p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Genre</th>
            <th>Deskripsi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($genres as $genre): ?>
            <tr>
                <td><?= $genre['id'] ?></td>
                <td><?= htmlspecialchars($genre['name']) ?></td>
                <td><?= htmlspecialchars($genre['description']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
