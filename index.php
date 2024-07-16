<html>
<head>
    <title>Product Selling Price Calculator</title>
</head>
<body>
    <h1>Product Selling Price Calculator</h1>
    <form action="calculate.php" method="post">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <fieldset>
                <legend>Product <?php echo $i; ?></legend>
                <label for="buying_price_<?php echo $i; ?>">Buying Price:</label>
                <input type="number" step="0.01" name="buying_price[]" id="buying_price_<?php echo $i; ?>" required><br>
                <label for="vat_<?php echo $i; ?>">VAT Rate (%):</label>
                <input type="number" step="0.01" name="vat[]" id="vat_<?php echo $i; ?>" required><br>
                <label for="expenses_<?php echo $i; ?>">General Expenses (%):</label>
                <input type="number" step="0.01" name="expenses[]" id="expenses_<?php echo $i; ?>" required><br>
                <label for="profit_<?php echo $i; ?>">Profit Margin (%):</label>
                <input type="number" step="0.01" name="profit[]" id="profit_<?php echo $i; ?>" required><br>
            </fieldset>
        <?php endfor; ?>
        <button type="submit">Calculate Selling Prices</button>
    </form>
</body>
</html>
