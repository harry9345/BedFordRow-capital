<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bedford Row Capital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  <link rel="stylesheet" href="./style/style.css" />
</head>

<body>
  <div class="container-fluid">
    <div class="row justify-content-md-center mb-5">
      <div class="col-md-11 border p-3">
        <form class="row g-3">
          <div class="row-auto">
            <label for="productId" class="col-sm-2 col-form-label">Product Id :</label>
            <input type="number" class="form-control" id="productId" placeholder="Product Id" />
          </div>
          <div class="row-auto">
            <label for="productName" class="col-sm-2 col-form-label">Product Name :</label>
            <input type="text" class="form-control" id="productName" placeholder="Product Name" />
          </div>
          <div class="row-auto">
            <label for="createdDate" class="col-sm-2 col-form-label">Date :</label>
            <input type="number" class="form-control" id="createdDate" placeholder="Created Date" />
          </div>

          <div class="row-auto">
            <label for="productSold" class="col-sm-2 col-form-label">Item To Be Sold :</label>
            <input type="number" class="form-control" id="productSold" placeholder="Number of Product To Be Sold" />
          </div>
          <div class="row-auto">
            <label for="minPriceRange" class="col-sm-2 col-form-label">
              Minimum Price Range :
            </label>
            <input type="number" class="form-control" id="minPriceRange" placeholder="Min Price" />
          </div>
          <div class="row-auto">
            <label for="maxPriceRange" class="col-sm-2 col-form-label">Maximum Price Range :</label>
            <input type="number" class="form-control" id="maxPriceRange" placeholder="Max Price" />
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-success mb-3">Submit</button>
          </div>
        </form>
      </div>
    </div>
    <div class="row justify-content-md-center mt-5">
      <div class="col-md-11 text-center border p-3">
        <table class="table table-striped table-success table-hover">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Product Name</th>
              <th scope="col">Item to be Sold</th>
              <th scope="col">Min Range</th>
              <th scope="col">Max Range</th>
              <th scope="col">Created Date</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "connect.php";

            $query = "SELECT * from products";
            $queryResult = $connnect->prepare($query);
            $queryResult->execute();
            $allData = $queryResult->fetchAll(PDO::FETCH_ASSOC);

            foreach ($allData as $product) {
              echo '
              
              <tr>
              <th scope="row">' . $product["ProductId"] . '</th>
              <td>' . $product["ProductName"] . '</td>
              <td>' . $product["NumberOfProductToBeSold"] . '</td>
              <td>' . $product["MinimumPriceRange"] . '</td>
              <td>' . $product["MaximumPriceRage"] . '</td>
              <td>' . $product["CreatedDate"] . '</td>
              <td>
                <div class="btn btn-secondary btn-sm">
                <a href="deleteProduct.php">
                <em class="far fa-trash-alt"></em>
                  </a>
                </div>
              </td>
            </tr>
              ';
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>