<?php include 'header.php'; ?>
<main>
    <h2>Data from Data.php</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
        <?php
        include 'Data.php'; // Include the data array
        foreach ($myData as $data) {
            echo "<tr>";
            echo "<td>" . $data['name'] . "</td>";
            echo "<td>" . $data['age'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <p><a href="index.php">Back to Home</a></p>
</main>
<?php include 'footer.php'; ?>
