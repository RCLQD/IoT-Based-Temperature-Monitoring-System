<?php
require "connection.php";

$sql = "SELECT * FROM mlxdata ORDER BY created_at DESC LIMIT 8";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div id="LowTemp" class="<?= (($row['temperature'] >= 41) ? 'High' : 'High') ?>" style="<?= ($row['temperature'] <= 40 ) ? 'display:none;' : 'display:inline-block;'; ?>">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <div class="subject">
                    <h3><?= ($row['temperature'] == 40) ? 'Warning' : (($row['temperature'] <= 30) ? 'Low' : (($row['temperature'] >= 42) ? 'High' : 'High')) ?></h3>
                    <p><?= date("F j, Y, g:i a", strtotime($row['updated_at'])) ?></p>
                </div>
                <div class="Temperature"><?= $row['temperature'] ?>°</div>
            </div>
        </div>
        <?php
    }

    mysqli_free_result($result);
    mysqli_close($conn);
}
?>
