                    <?php
                    include('connection.php');
                    $query = "SELECT * FROM land";
                    $query_run = mysqli_query($conn, $query);
                    $check_land = mysqli_num_rows($query_run) > 0;
                    if($check_land)
                    {
                        while($row = mysqli_fetch_assoc($query_run));
                    }
                    ?>