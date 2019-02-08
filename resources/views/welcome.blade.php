<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #dddddd;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            h1 {
              color: white;
              font-weight: bolder;
              justify-content: center;
              align-items: center;
            }

            header {
              width: 100%;
              height: 100px;
              background-color: #1bab48;
              border-radius: 5px 5px 0 0;
              display: flex;
              justify-content: center;
              align-items: center;
            }

            .container {
              width: 80%;
              max-width: 980px;
              margin: 20px auto;
              background: white;
              border-radius: 5px;
              padding: 0;
            }

            .btn-success {
              margin: 20px 40px;
              background-color: #1bab48;
              float: right;
            }

            .content {
              border: 1px solid #dee2e6;
              border-radius: 5px;
              margin: 40px;
            }

            .table {
              margin-bottom: 0;
            }

            .table thead th {
              border: 0;
            }

            #form{
              background-color:white;
              color:#123456;
              font-Weight:400;
              }

              input[type="file"] {
                margin-top: 20px;
                appearance: none;
              }

              label {
                margin: 10px 0;
              }

        </style>

    </head>
    <body>
        <div class="container">

          <header>
            <div class="main-title">
              <h1>expense manager</h1>
            </div>
          </header>


            <div class="content">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">User</th>
                    <th scope="col">Date</th>
                    <th scope="col">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>User1</td>
                    <td>Date1</td>
                    <td>Amount1</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="row">
              <div class="col-md-12">
                <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal" name="button">+ADD EXPENSE</button>
              </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add your expense</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="form" name="form">
                      <div class="form-group">
                        <div class="form-group">
                      <label>Date:</label>
                      <input class="form-control" name="date_puchased" id="datetime" type="datetime-local">
                      <label>Description:</label>
                      <input class="form-control" name="description" id="Description" type="text">
                      <label>Comment:</label>
                      <input class="form-control" name="comment" id="Comment" type="text">
                      <label>Amount:</label>
                      <input class="form-control" name="ammount" id="Amount" type="number">
                      <label>Currency:</label>
                      <select class="form-control" name="currency_id" id="Currency">
                          @foreach($currencies as $currency)
                            <option value="{{ $currency->id }}">{{ $currency->code }}</option>
                          @endforeach
                      </select>
                      <input type="file" name="receipt" accept="image/*" capture="environment">
                      <input class="btn btn-success" id="submit" type="submit" value="+ ADD">
                      </div>
                    </form>

                    <script type="text/javascript">
                        $(function () {
                            $('#datetime').datetimepicker({
                                locale: 'ru'
                            });
                        });
                    </script>

                  </div>
                </div>
              </div>
            </div>

        </div>
    </body>
</html>

