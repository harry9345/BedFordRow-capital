<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./style/favicon.png" type="image/x-icon">
  <title>Bedford Row Capital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  <link rel="stylesheet" href="./style/style.css" />
</head>

<body>
  <div class="container-fluid">
    <div class="row justify-content-md-center mb-5">
      <div class="col-md-11 border p-3">
        <form class="row g-3 needs-validation" novalidate action="insertProduct.php" method="post">
          <div class="row-auto">
            <label for="productId" class="col-sm-2 col-form-label">Product Id :</label>
            <input type="number" class="form-control" name="productId" id="productId" placeholder="Product Id" required />
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please insert product Id .
            </div>
          </div>
          <div class="row-auto">
            <label for="productName" class="col-sm-2 col-form-label">Product Name :</label>
            <input type="text" class="form-control" name="productName" id="productName" placeholder="Product Name" required />
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please insert product name .
            </div>
          </div>
          <div class="row-auto ">
            <label for="createdDate" class="col-sm-2 col-form-label"> Created Date :</label>
            <input type="text" class="form-control" name="createdDate" id="createdDate" placeholder="DD/MM/YY or DD-MM-YY " />
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="row-auto">
            <label for="productSold" class="col-sm-2 col-form-label">Item To Be Sold :</label>
            <input type="number" class="form-control" name="productSold" id="productSold" placeholder="Number of Product To Be Sold" required />
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please insert product name .
            </div>
          </div>
          <div class="row-auto">
            <label for="minPriceRange" class="col-sm-2 col-form-label">
              Minimum Price Range :
            </label>
            <input type="number" class="form-control" name="minPriceRange" id="minPriceRange" placeholder="Min Price" />
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="row-auto">
            <label for="maxPriceRange" class="col-sm-2 col-form-label">Maximum Price Range :</label>
            <input type="number" class="form-control" name="maxPriceRange" id="maxPriceRange" placeholder="Max Price" />
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-success mb-3">Submit</button>
          </div>
        </form>
      </div>
    </div>
    <div class="row justify-content-md-center mt-5">
      <div class="col-md-11 text-center border p-3">
        <table class="table table-striped table-success table-hover" id="table">
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
            $queryResult = $connect->prepare($query);
            $queryResult->execute();
            $allData = $queryResult->fetchAll(PDO::FETCH_ASSOC);

            foreach ($allData as $product) {
              echo '
              
              <tr>
                <th scope=row>' . $product['productId'] . '</th>
                <td>' . $product['productName'] . '</td>
                <td>' . $product['productToBeSold'] . '</td>
                <td>' . $product['minimumPriceRange'] . '</td>
                <td>' . $product['maximumPriceRage'] . '</td>
                <td>' . $product['created_at'] . '</td>
                <td>
                    <div class="btn btn-secondary btn-sm">
                      <a href="deleteProduct.php?id=' . $product['id'] . '  " >
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
  <script src="./jsScript.js"></script>
</body>

</html>