<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .table__header{
        justify-content: space-between;
      }
       h1{
          display: flex;
          text-align: left;
       }
       .data{
        display: flex;
        gap: 2rem;
       }
       .data input{
        width: 100%;
  border: none;
  outline: none;
  padding: .5em 0;
  border-radius: .2em;
  padding-left: .2em;
  font-size: 1.05em;
  font-weight: 500;
  transition: all 0.3s ease;
       }

       .data input:focus{
        background-color: var(--secondary-text-clr);
       }

       #credentials{
        margin-left: 4rem;
       }

       #credentials h2{
          margin: 1.7rem 0;
       }
        
       #credentials input[type = "submit"]{
          width: 20%;
          margin-left: 12rem;
          cursor: pointer;
          font-weight: 500;
          font-size: 1.1em;
       }

    </style>
</head>
<body>
<main class="table" id="customers_table">
        <section class="table__header">
            <h1>Place Order</h1>
            <!-- <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="../images/search.png" alt="">
            </div> -->
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Total Quantity <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Unity Price <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Total Price <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Quantity <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td>Maize</td>
                        <td> 1 </td>
                        <td> $100 </td>
                        <td><strong> $128.90 </strong></td>
                        <td class="actions"><input type="number"></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td>Maize</td>
                        <td> 1 </td>
                        <td> $100 </td>
                        <td><strong> $128.90 </strong></td>
                        <td class="actions">
                        <input type="number">
                        </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td>Maize</td>
                        <td> 1 </td>
                        <td> $100 </td>
                        <td><strong> $128.90 </strong></td>
                        <td class="actions">
                        <input type="number">
                        </td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td>Maize</td>
                        <td> 1 </td>
                        <td> $100 </td>
                        <td><strong> $128.90 </strong></td>
                        <td class="actions">
                        <input type="number">
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <main id="credentials">
        <h2>User credentials</h2>
        <div class="data">
          <div class="item">
            <label for="">Customer Name</label><br>
            <input type="text"><br><br>
            </div>
            <div class="item">
            <label for="">Location</label><br>
            <input type="text"><br><br>
            </div>
            <div class="item">
            <label for="">Telephone Number</label><br>
            <input type="text">
            </div>
        </div>
        <input type="submit">
        </main>
    </main>
</body>
</html>