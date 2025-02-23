<div class="payment_section">
    <h2>Outsource payment collection</h2>
    <p>Faster and flexible access to cash flow from one or all your invoices.</p>
    <div class="cards_sections">

        <?php

        include "./data/payments.php";

        $result = getPaymentData();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {


                echo '
                <div class="card ' . $row["id"] . '">
                    <img src="' . $row["icons"] . '" alt="icons">
                    <h3>' . $row["name"] . '</h3>
                    <p>' . $row["p_desc"] . '</p>
                </div>
            ';
            }
        }

        ?>

    </div>
</div>