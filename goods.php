<?php require_once "includes/header.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-resource.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.min.js"></script>
<script src="https://cdn.firebase.com/js/client/2.0.4/firebase.js"></script>
<script src="https://cdn.firebase.com/libs/angularfire/0.9.0/angularfire.min.js"></script>
<script type="text/javascript" src="app/controllers.js"></script>  


<div class="row" ng-app="groceryApp" >
<ng-view></ng-view>
    <div class="col-lg-2 col-sm-12">
    <div class="form-group">
    <label for="search">Поиск</label>
        <input type="text" class="form-control" id="search" ng-model="$ctrl.query" placeholder="Поиск товара" />
</div>
    </div>
    <div class="col-lg-10 col-sm-12" ng-controller="GroceryListCtrl">
        <ul>
            <li class="goods-item" ng-repeat="good in goods | filter:$ctrl.query ">
            
                <img class="img-goods" ng-src="{{good.url}}" alt="{{good.name}}"/> <br>
                <span><strong>{{good.name}}</strong></span><br>
                
                <span>Артикул: {{good.article}}</span><br>
                <span id="description" ng-init="descr = good.description.slice(0, 100)" >
                {{descr}}...</span><br> 
                <div class="price-block">
                <span class="label" ng-init="status = good.repository ? '\u2713 в наличии' : '\u2718 под заказ'"
                ng-class="{'label-success' : good.repository, 'label-warning' : !good.repository}" > 
                    {{status}}
                </span><br>
                <span class="price"><strong>{{good.price}}</strong>грн</span><br>
                </div>
            </li>
        </ul>
    </div>
</div>

<?php
require_once "includes/footer.php" ?>