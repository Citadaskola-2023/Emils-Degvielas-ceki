<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuel Receipt Form</title>
      <style>
          body {
              font-family: 'Helvetica Neue', Arial, sans-serif;
              background-color: #f5f5f5;
              padding: 20px;
          }

          h1 {
              font-size: 2rem;
              font-weight: 700;
              color: #333;
              text-align: center;
              margin-bottom: 30px;
          }

          form {
              background-color: #fff;
              padding: 20px;
              border-radius: 4px;
              box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
          }

          input[type="text"],
          input[type="number"],
          input[type="datetime-local"],
          select {
              width: 100%;
              padding: 12px 20px;
              margin: 8px 0;
              box-sizing: border-box;
              border: 1px solid #ccc;
              border-radius: 4px;
          }

          input[type="submit"] {
              width: 100%;
              background-color: #4CAF50;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              border-radius: 4px;
              cursor: pointer;
          }

          input[type="submit"]:hover {
              background-color: #45a049;
          }

      </style>
  </head>

  <body>
    <h1>Fuel Receipt Form</h1>
    <form action="process.php" method="post">
        License Plate:     <input type="text" name="license_plate"><br>
        Date and Time:     <input type="datetime-local" name="date_time"><br>
        Petrol Station:    <input type="text" name="petrol_station"><br>
        Fuel Type:         <input type="text" name="fuel_type"><br>
        Refueled (liters): <input type="number" name="refueled"><br>
        Total (currency):  <input type="number" name="total"><br>
        Currency:          <select name="currency">
        <option value="USD">United States Dollar (USD)</option>
        <option value="EUR">Euro (EUR)</option>
        <option value="CNY">Chinese Yuan (CNY)</option>
        <option value="JPY">Japanese Yen (JPY)</option>
        <option value="GBP">Pound Sterling (GBP)</option>
        <option value="KRW">South Korean Won (KRW)</option>
        <option value="MXN">Mexican Peso (MXN)</option>
        <option value="INR">Indian Rupee (INR)</option>
        <option value="RUB">Russian Ruble (RUB)</option>
        <option value="BRL">Brazilian Real (BRL)</option>
        <option value="TWD">New Taiwan Dollar (TWD)</option>
        <option value="HKD">Hong Kong Dollar (HKD)</option>
        <option value="IDR">Indonesian Rupiah (IDR)</option>
        <option value="SGD">Singapore Dollar (SGD)</option>
        <option value="AUD">Australian Dollar (AUD)</option>
        <option value="CHF">Swiss Franc (CHF)</option>
        <option value="SEK">Swedish Krona (SEK)</option>
        <option value="NOK">Norwegian Krone (NOK)</option>
        <option value="DKK">Danish Krone (DKK)</option>
        <option value="THB">Thai Baht (THB)</option>
      </select> <br>
Fuel Price:                <input type="number" step="0.01" name="fuel_price"><br>
    <input type="submit" value="Submit"> </form>
  </body>
</html>

