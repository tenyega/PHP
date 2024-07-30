<?php $clients = [
    ['prenom' => 'Alice', 'age' => 30, 'dispo' => true],
    ['prenom' => 'Bob', 'age' => 25, 'dispo' => false],
    ['prenom' => 'Charles', 'age' => 42, 'dispo' => false]

];
?>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #000;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #87CEFA;
    }
</style>
<table>
    <thead>
        <tr>
            <th>FIRSTNAME</th>
            <th>AGE</th>
            <th>AVAILABLE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clients as $client) : ?>
            <tr>
                <td><?php echo htmlspecialchars($client['prenom']); ?></td>
                <td><?php echo htmlspecialchars($client['age']); ?></td>
                <td>
                    <?php echo $client['dispo'] ? '✅' : '❌'; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>