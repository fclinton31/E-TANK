
<!DOCTYPE html>
<html lang="en" data-ng-app="HealthApp">
<head>
    <title>customer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/angular-toastr.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body ng-controller="userController">
    <div class="col-md-12 header">
       <div class="logo"><h3 style="color:white;font-size:1.8em;text-align:right;">Customer Section</h3></div> 
    </div>
    <div class="col-md-12 nav-pills-container">
        <ul class="nav nav-pills">
            <li><a href="#">Home</a></li>
            <li class="selected-nav-item"><a href="userReport.php">Reports</a></li>
            <li class="logout-li"><a ng-click="logout()"><div class="glyphicon glyphicon-log-out"></div> Logout</a></li>
        </ul>
    </div>
    <div class="col-md-12 search-and-results-container"> 
        <!-- search results --> 
        <div class="section table-hover-highlight">
            <div class="col-md-12 section-header">
                <div class="concessionID-section">
                    <div class="col-md-2 no-padding-left">
                        <div class="col-md-1 no-padding-left vertical-align-center">                          
                        </div>
                        <div class="col-md-10 no-padding-left">
                            <div class="concession-name">{{details.FirstName}} {{details.Surname}}</div>
                            <div>{{details.idNumber}}</div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="single-print"><i ng-click="openUpdateModal(details)" class="fa fa-edit" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-10 no-padding-left">
                        <div class="col-md-2 no-padding-left">
                            Gender:{{details.Gender}}
                        </div>
                        <div class="col-md-3">
                           Cell Number: {{details.CellNumber}}
                        </div>
                        <div class="col-md-4">
                          Email: {{details.Email}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-body">
                <div class="table-container">
                    <table class="table table-bordered table-hover header-fixed table-striped" >
                        <thead>
                            <tr>
                                <th>Available Tank </th>
                                <th>Price per liter</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat='tank in tankInfo'>
                                <td>{{tank.Name}}</td>
                                <td>{{tank.AmountPerLiter}} </td>
                                <td><button type="button" value="submit" class="btn btn-success" ng-click="openPetrolModal(tank)">Buy</button> </td>
                            </tr>                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- footer-->
    </div>
     <script type="text/ng-template" id="patientUpdateModalContent.html">
    <!-- Patient Registration Modal -->
        <form class="form-horizontal" name="registerForm">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" ng-click="close()">&times;</button>
                <h4 class="modal-title">{{updateStatus}} Profile</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-sm-6">                      
                            <div class="form-group" >
                                <label class="control-label col-sm-3">ID Number:</label>
                                <div class="col-sm-9" ng-keyup="ValidateIdnumber()" ng-class="{'has-error' : registerForm.IDNo.$invalid && !registerForm.IDNo.$pristine }" >
                                    <input type="text" class="form-control" id="id_number" name="id_number"  ng-model="patientData.idNumber" ng-pattern="/^[0-9]{13}$/" ng-readonly="{{truefalse}}" required>                  
                                      <span style="color:red" ng-show="registerForm.id_number.$pristine && registerForm.id_number.$invalid "> ID number is required.</span>
                                     <br /> <span id="errors" style="color:red" ></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="name">Name:</label>
                                <div class="col-sm-9" ng-class="{'has-error' : registerForm.FirstName.$invalid && !registerForm.FirstName.$pristine }" >
                                    <input type="text" class="form-control" id="FirstName" name="FirstName"  ng-model="patientData.FirstName" maxLength='25' ng-pattern="/^[a-zA-Z_-]*$/"  ng-readonly="{{truefalse}}" required>
                                     <span style="color:red" ng-show="registerForm.FirstName.$pristine && registerForm.FirstName.$invalid"> name is required.</span>
                                     <span style="color:red" ng-show="registerForm.FirstName.$error.pattern">incorrect name format</span> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Surname:</label>
                                <div class="col-sm-9" ng-class="{'has-error' : registerForm.Surname.$invalid && !registerForm.Surname.$pristine }">
                                    <input type="text" class="form-control" name="Surname"  data-ng-model="patientData.Surname" ng-pattern="/^[a-zA-Z_-]*$/" maxLength='25'  ng-readonly="{{truefalse}}" required >
                                     <span style="color:red" ng-show="registerForm.Surname.$pristine && registerForm.Surname.$invalid"> surname is required.</span>
                                    <span style="color:red" ng-show="registerForm.Surname.$error.pattern">incorrect surname format</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Cell no:</label>
                                <div class="col-sm-9" ng-class="{'has-error' : registerForm.CellNumber.$invalid && !registerForm.CellNumber.$pristine }">
                                    <input type="text" class="form-control" name="CellNumber"  ng-model="patientData.CellNumber" ng-pattern="/^[0-0][6-8][0-9]{8}$/" maxLength='10' required>                     
                                      <span style="color:red" ng-show="registerForm.CellNumber.$pristine && registerForm.CellNumber.$invalid"> cell number is required.</span>
                                    <span style="color:red" ng-show="registerForm.CellNumber.$error.pattern">cell number is incorrect</span> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Password:</label>
                                <div class="col-sm-9" >
                                    <input class="form-control" ng-model=patientData.password>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" > 
                            <div class="form-group">
                                <label class="control-label col-sm-3">Email:</label>
                                <div class="col-sm-9" ng-class="{'has-error' : registerForm.Email.$invalid && !registerForm.Email.$pristine }">
                                    <input type="email" class="form-control" name="email"  ng-model="patientData.Email" ng-pattern="/^[_a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{1,3})$/" required>
                                    <span style="color:red" ng-show="registerForm.email.$pristine && registerForm.email.$invalid"> email required.</span>
                                    <span style="color:red" ng-show="registerForm.email.$error.pattern"></span>
                                </div>
                            </div>                           
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" value="submit"  data-ng-click="save()">{{updateStatus}}</button>
                <button type="button" class="btn btn-default" ng-click="close()">Close</button>
            </div>
        </form>
   </script>
   <script type="text/ng-template" id="buyModalContent.html">
   
        <form class="form-horizontal" name="registerForm">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" ng-click="close()">&times;</button>
                <h4 class="modal-title"> Re-Fill Fuel</h4> 
                <br>
                <div class="alert alert-danger" ng-show="errorFuel">{{errorFuel}}</div>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="form-group">
                                <label class="control-label col-sm-3" for="name">By Amount:</label>
                                <div class="col-sm-8"  >
                                    <input type="number" class="form-control" id="amount" name="amount"  ng-model="fuelData.amount" ng-change="calcAmount(fuelData)">
                                     
                                </div>
                            </div>
                </div>
                <div class="form-group">
                                <label class="control-label col-sm-3" for="name">By Liters:</label>
                                <div class="col-sm-8"  >
                                    <input type="number" class="form-control" min="1" id="liter" name="FirstName"  ng-model="fuelData.liter" ng-change="calcAmountLiter(fuelData)">
                                     
                                </div>
                            </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" value="submit"  ng-hide="dis"  data-ng-click="buy(fuelData)">Buy</button>
                <button type="button" class="btn btn-default" ng-click="close()">Close</button>
            </div>
        </form>
   </script>
      <script src="js/jquery.js" type="text/javascript"></script>
      <script src="js/bootstrap.js" type="text/javascript"></script>
        <!-- angular extentions-->
      <script src="js/angular.js" type="text/javascript"></script> 
      <script src="app.js" type="text/javascript"></script>
      <script src="js/toaster.min.js" type="text/javascript"></script>
      <script src="js/angular-moment.min.js" type="text/javascript"></script>
      <script src="js/angular-route.min.js" type="text/javascript"></script>
      <script src="js/angular-ui-router.js" type="text/javascript"></script>
      <script src="js/ui-bootstrap-tpls.min.js" type="text/javascript"></script>
      <script src="js/dialogs.min.js" type="text/javascript"></script> 
      <script src="js/idvalidator.js" type="text/javascript"></script> 
        <!-- Load controllers -->
     <script src="angular/userController.js" type="text/javascript"></script>  
     <script src="angular/sharedService.js" type="text/javascript"></script>  
     <script src="angular/loginService.js" type="text/javascript"></script>    

</body>
</html>

<toaster-container></toaster-container>