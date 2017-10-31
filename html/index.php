<!DOCTYPE html> 
<?php include 'head.php'; ?>
    <div w3-include-html="head.php"></div> 
<body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <img alt="logo" src="https://vignette.wikia.nocookie.net/finalfantasy/images/5/5d/FFXIV_A_Realm_Restored_trophy_icon.png/revision/latest?cb=20160508021814" style=" float: left; width: 50px; heigh: 50px;"> 
      <h4 class="navbar-text">FFXIV MARKET</h4>
    </div>
    <div id="navbuttons" class="show">
      <ul class="nav navbar-nav navbar-right">
        <li><a data-toggle="modal" href="forms/login.php" id="loginbutton" data-target="#remoteModal"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
        <li><a data-toggle="modal" href="forms/createaccount.php" id="createaccbutton" data-target="#remoteModal"><span class="glyphicon glyphicon-tag"></span> Sign Up</a></li>
      </ul>  
    </div>
    <div id="loggedin" class="hidden">
      <ul class="nav navbar-nav navbar-right">
        <li><a data-toggle="modal" href="forms/account.php" id="accountpage" data-target="#remoteModal"><span class="glyphicon glyphicon-user" ></span> username </a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-menu-hamburger"></span>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">characters</a></li>
          <li><a href="#">change password</a></li>
          <li><a href="#">logout</a></li>
        </ul>
      </li>
        </ul>  
      </div>
      
</nav>
<div class="navbarspacer"></div>
<div class="container">
  <div class="col-sm-10 col-sm-offset-1">
    <div class="panel panel-default"> 
        <div class="panel-heading text-center"><font class="text-primary">DATACENTERS</font> </div>
        <div class="headerspacer"></div>
        <!-- Datacenter row and columns -->
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">EUROPE</h3>
                    </div>
                    <div class="panel-body">
                         <div class="radio">
                            <label><input type="radio" name="optradio">server 1</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="optradio">server 2</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="optradio">server 3</label>
                          </div> 
                    </div>
                </div>
            </div>
           <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">AMERICA</h3>
                    </div>
                    <div class="panel-body">
                         <div class="radio">
                            <label><input type="radio" name="optradio">server 1</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="optradio">server 2</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="optradio">server 3</label>
                          </div> 
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">JAPAN</h3>
                    </div>
                    <div class="panel-body">
                         <div class="radio">
                            <label><input type="radio" name="optradio">server 1</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="optradio">server 2</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="optradio">server 3</label>
                          </div> 
                    </div>
                </div>
            </div>
            <!-- end of datacenter row and columns -->
        </div>
    </div>
  </div>


    <!-- search item bar (placeholder) -->
  <div class="col-sm-10 col-sm-offset-1">
    <div class="well">
      <div class="row">
        <div class="col-sm-8">
          <h4>Search item</h4>
        </div>
        <div class="form-group">
          <div class="col-sm-6">
              <input type="search" class="form-control" id="search" placeholder="Search item"/>
          </div>
          <div class="col-sm-2">
            <!-- Search button (placeholder) -->
            <input type="submit" class="btn" id="searchbtn" value="Search">
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="col-sm-10 col-sm-offset-1">
    <!-- Refresh lists and create listing buttons -->
    <button type="button" class="btn">Refresh Item List</button>   
    
    <button type="button" class="btn" data-toggle="modal"  href="forms/listitem.php" data-target="#remoteModal" style="float: right;">List item</button><br><br>
    <!-- Listed items and item order boxes -->
<div class="well">
  <div class="row" style="text-align: center">
    <div class="col-sm-6">
      <h4>For sale</h4>
    </div>
    <div class="col-sm-6">
      <h4>Orders</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="panel-default" style="background-color: #A4A4A4">
        <div class="panel-body">
          <button type="button" class="btn btn-primary col-sm-12" data-toggle="modal" href="forms/buyitem.php" id="buyitem" data-target="#remoteModal">Augmented Lost Allagan Claymore</button>
          <button type="button" class="btn btn-warning col-sm-12" data-toggle="modal" href="forms/buyitem.php" id="buyitem" data-target="#remoteModal">Placeholder for styling</button>
          <button type="button" class="btn btn-primary col-sm-12" data-toggle="modal" href="forms/buyitem.php" id="buyitem" data-target="#remoteModal">memes and other fun stuff</button>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
        <div class="panel-default" style="background-color: #A4A4A4">
          <div class="panel-body">
            <button type="button" class="btn btn-primary col-sm-12" data-toggle="modal" href="forms/buyitem.php" id="buyitem" data-target="#remoteModal">Order placeholder</button>
          </div>
        </div>
      </div>
     </div>
    </div>
  </div>
</div>

    <!-- Remote modal -->
<div class="modal fade" id="remoteModal" tabindex="-1" role="dialog" aria-labelledby="remoteModal" aria-hidden="true">
  <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center">
      <div class="modal-content">
          <!-- The remote modal gets loaded here -->
      </div>
    </div>
  </div>
</div>
    <!-- this button will be replaced by a token check to see if a user is logged in -->
<button id="replace" type="button" style="float:right">simulate login</button><br><br>
</body>
</html>


