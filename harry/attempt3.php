<div style="display: flex; justify-content: space-around;">
    <div>
        <h2>Find address</h2>
        <form method="POST">
            <p>
                <label for="address">Enter address:</label>
                <input type="text" name="address" id="address">
            </p>
            <p>
                <button type="submit" name="submit_address">Find</button>
            </p>
        </form>
    </div>

    <div>
        <h2>Find coordinates</h2>
        <form method="POST">
            <p>
                <label for="latitude">Enter latitude:</label>
                <input type="text" name="latitude" id="latitude">
            </p>
            <p>
                <label for="longitude">Enter longitude:</label>
                <input type="text" name="longitude" id="longitude">
            </p>
            <p>
                <button type="submit" name="submit_coordinates">Find</button>
            </p>
        </form>
    </div>
</div>

<div style="margin-top: 2rem;">
    <?php
    if (isset($_POST["submit_address"]))
    {
        $address = $_POST["address"];
        $address = str_replace(" ", "+", $address);
        ?>
        <h3>Address found:</h3>
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
    <?php
    }
    elseif (isset($_POST["submit_coordinates"]))
    {
        $latitude = $_POST["latitude"];
        $longitude = $_POST["longitude"];
        ?>
        <h3>Coordinates found:</h3>
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
    <?php
    }
    ?>
</div>
