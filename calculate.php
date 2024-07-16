<html>
<head>
    <title>Selling Price Results</title>
</head>
<body>
    <h1>Selling Price Results</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $buying_prices = $_POST['buying_price'];
        $vat_rates = $_POST['vat'];
        $expenses_percentages = $_POST['expenses'];
        $profit_margins = $_POST['profit'];
        
        for ($i = 0; $i < 10; $i++) {
            $buying_price = (float)$buying_prices[$i];
            $vat_rate = (float)$vat_rates[$i];
            $expenses_percentage = (float)$expenses_percentages[$i];
            $profit_margin = (float)$profit_margins[$i];
            
            // Calculate VAT
            $vat_amount = $buying_price * ($vat_rate / 100);
            
            // Calculate General Expenses
            $expenses_amount = $buying_price * ($expenses_percentage / 100);
            
            // Calculate Profit Margin
            $profit_amount = $buying_price * ($profit_margin / 100);
            
            // Calculate Selling Price
            $selling_price = $buying_price + $vat_amount + $expenses_amount + $profit_amount;
            
            echo "<h2>Product " . ($i + 1) . "</h2>";
            echo "<p>Buying Price: $" . number_format($buying_price, 2) . "</p>";
            echo "<p>VAT Amount: $" . number_format($vat_amount, 2) . "</p>";
            echo "<p>General Expenses: $" . number_format($expenses_amount, 2) . "</p>";
            echo "<p>Profit Margin: $" . number_format($profit_amount, 2) . "</p>";
            echo "<p><strong>Selling Price: $" . number_format($selling_price, 2) . "</strong></p>";
        }
    } else {
        echo "<p>No data received. Please go back and submit the form.</p>";
    }
    ?>
    <br>
    <a href="index.php">Back to Form</a>
</body>
</html>
