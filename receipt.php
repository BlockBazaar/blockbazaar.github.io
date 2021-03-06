<!DOCTYPE html>
<html lang="en">
<header>
	<title>Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
	<link href="style_sheets/home.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');
        body {
  font-family: "Montserrat", sans-serif;
  font-weight: 400;
  color: #322d28;
}

header.top-bar h1 {
    /* font-weight: bold; */
    font-family: "Montserrat", sans-serif;
}

main {
  margin-top: 4rem;
  min-height: calc(100vh - 107px);
}
main .inner-container {
  max-width: 800px;
  margin: 0 auto;
}

table.invoice {
  background: #fff;
}
table.invoice .num {
  font-weight: 200;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-size: 0.8em;
}
table.invoice tr, table.invoice td {
  background: #fff;
  text-align: left;
  font-weight: 400;
  color: #322d28;
}
table.invoice tr.header td img {
  max-width: 300px;
}
table.invoice tr.header td h2 {
  text-align: right;
  font-family: "Montserrat", sans-serif;
  font-weight: 200;
  font-size: 2rem;
  color: #1779ba;
}
table.invoice tr.intro td:nth-child(2) {
  text-align: right;
}
table.invoice tr.details > td {
  padding-top: 4rem;
  padding-bottom: 0;
}
table.invoice tr.details td.id, table.invoice tr.details td.qty, table.invoice tr.details th.id, table.invoice tr.details th.qty {
  text-align: center;
}
table.invoice tr.details td:last-child, table.invoice tr.details th:last-child {
  text-align: right;
}
table.invoice tr.details table thead, table.invoice tr.details table tbody {
  position: relative;
}
table.invoice tr.details table thead:after, table.invoice tr.details table tbody:after {
  content: "";
  height: 1px;
  position: absolute;
  width: 100%;
  left: 0;
  margin-top: -1px;
  background: #c8c3be;
}
table.invoice tr.totals td {
  padding-top: 0;
}
table.invoice tr.totals table tr td {
  padding-top: 0;
  padding-bottom: 0;
}
table.invoice tr.totals table tr td:nth-child(1) {
  font-weight: 500;
}
table.invoice tr.totals table tr td:nth-child(2) {
  text-align: right;
  font-weight: 200;
}
table.invoice tr.totals table tr:nth-last-child(2) td {
  padding-bottom: 0.5em;
}
table.invoice tr.totals table tr:nth-last-child(2) td:last-child {
  position: relative;
}
table.invoice tr.totals table tr:nth-last-child(2) td:last-child:after {
  content: "";
  height: 4px;
  width: 110%;
  border-top: 1px solid #1779ba;
  border-bottom: 1px solid #1779ba;
  position: relative;
  right: 0;
  bottom: -0.575rem;
  display: block;
}
table.invoice tr.totals table tr.total td {
  font-size: 1.2em;
  padding-top: 0.5em;
  font-weight: 700;
}
table.invoice tr.totals table tr.total td:last-child {
  font-weight: 700;
}

.additional-info h5 {
  font-size: 0.8em;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  color:black;
}

.a1{
    color: gray;
}
</style>
<body>
    <div class="section-title">
        <h2>Invoice</h2>
    </div>
    <header class="top-bar align-center">
      </header>
      <div class="row expanded">
        <main class="columns">
          <div class="inner-container">
          <header class="row align-center">
              <a href="*" class="a1"> Back</a>
              &nbsp;&nbsp;<a href="*" class="" onclick="window.print()">Print Invoice</a>
            </header>
          <section class="row">
            <div class="callout large invoice-container">
              <table class="invoice">
                <tr class="header">
                  <td class="">
                    Company Name
                  </td>
                  <td class="align-right">
                    <h2>Billing Invoice</h2>
                  </td>
                </tr>
                <tr class="intro">
                  <td class="">
                    Hello, Amit Sarkar.<br>
                    Thank you for your order.
                  </td>
                  <td class="text-right">
                    <span class="num">Order #00302</span><br>
                    May 18, 2022
                  </td>
                </tr>
                <tr class="details">
                  <td colspan="2">
                    <table>
                      <thead>
                        <tr>
                          <th class="desc">Item Description</th>
                          <th class="id">Item ID</th>
                          <th class="qty">Quantity</th>
                          <th class="amt">Subtotal</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="item">
                          <td class="desc">Name</td>
                          <td class="id num">MH792AM</td>
                          <td class="qty">1</td>
                          <td class="amt">$100.00</td>
                        </tr>
                      </tbody>
                    </table>
                  </td> 
                </tr>
                <tr class="totals">
                  <td></td>
                  <td>
                    <table>
                      <tr class="subtotal">
                        <td class="num">Subtotal</td>
                        <td class="num">$100.00</td>
                      </tr>
                      <tr class="fees">
                        <td class="num">Shipping & Handling</td>
                        <td class="num">$0.00</td>
                      </tr>
                      <tr class="tax">
                        <td class="num">Tax (7%)</td>
                        <td class="num">$7.00</td>
                      </tr>
                      <tr class="total">
                        <td>Total</td>
                        <td>$107.00</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              
              <section class="additional-info">
              <div class="row">
                <div class="columns">
                  <h5>Billing Information</h5>
                  <p>Amit Sarkar<br>
                    134 Charu Ave.<br>
                    Kolkata WB 700033<br>
                    India</p>
                </div>
                <div class="columns">
                  <h5>Payment Information</h5>
                  <p>Credit Card<br>
                    Card Type: Visa<br>
                    &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; 1234
                    </p>
                </div>
              </div>
              </section>
            </div>
          </section>
          </div>
        </main>
      </div>
</body>