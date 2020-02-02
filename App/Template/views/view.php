<?php /** @var \App\Data\CategoryDTO[] $data */ ?>

<table border="1">
    <thead>
    <tr>
        <td>Level 1</td>
        <td>Level 2</td>
        <td>Level 3</td>
        <td>Level 4</td>
    </tr>
    </thead>

    <tbody>
        <?php foreach($data as $CategoryDTO): ?>
            <tr>
                <td><?= $CategoryDTO->getName(); ?></td>
                <td><?= $CategoryDTO->getName(); ?></td>
                <td><?= $CategoryDTO->getName(); ?></td>
                <td><?= $CategoryDTO->getName(); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>
