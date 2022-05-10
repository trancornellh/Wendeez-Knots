<?php

    $query = mysqli_query($conn, "SELECT MAX(order_id) FROM orders");
    $result = mysqli_fetch_array($query);
    $orderNum = $result['MAX(order_id)'];