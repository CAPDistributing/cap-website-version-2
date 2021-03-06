<!DOCTYPE html>
<html ng-app="store" lang="en">
<head>
  
	<title>Audiobooks - CAP Distributing</title>
	<meta name="description" content="CAP Distributing has great audiobooks. Come and see our great selection." />
	<meta name="keywords" content="audiobooks, john le carre, clive cussler" />
  <?php include_once("../templates/head.html"); ?>
  
</head>
<body ng-controller="StoreController as store">
  
  <?php include_once("../templates/cap-logo.html"); ?>
  <?php include_once("../templates/nav.html"); ?>
  
  <div class="container">
    <h2>Audiobooks</h2>
    
    <div class="row">
      <div class="col-md-4 product-info" style="min-height: 650px;" ng-repeat="product in store.audiobooks" ng-hide="product.soldOut">
        <img class="product-img" ng-src="{{product.image.src}}" />
        <h3 class="product-name">{{product.name}}</h3>
        <ul class="product-bullets-ul">
          <li class="product-bullets-li">{{product.bullets[0]}}</li>
        </ul>
        <a class="btn btn-cap" ng-href="{{product.amazonLink}}">Buy on Amazon &gt;&gt;</a>
      </div>
    </div>

  </div><?php #End .container ?>
  
  <?php include_once("../templates/footer.html"); ?>
  
</body>
</html>