<script>
    function goIndex() {
        location = "index.php";
    }
    function searchThat() {
        var search = $("input[name='search']").val();
        location = "?search="+search;
    }
</script>
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Navigasyon</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"></a>
    </div>
<div class="collapse navbar-collapse">
    <div  onclick="goIndex()" style="display: inline-block">
        <div style="display: inline-block;float:left;">
            <img src="img/logo.png" height="50px" width="65px" />
        </div>
        <div style="display: inline-block;">
            <div style="display: table; height: 50px;">
                <div style="display: table-cell; vertical-align: middle; font-weight: bolder; font-size: 20px; color: white;">Soft Theatre</div>
            </div>
        </div>
    </div>

	<ul class="nav navbar-nav navbar-right">
        <li><a href="theatre.php">Tiyatro</a></li>
        <li><a href="movie.php">Sinema</a></li>
        
		
		
		<form class="navbar-form navbar-left" >
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Etkinlik Ara" name="search">
        </div>
            <div class="btn btn-default" style="background: darkred; color:white; border:none;" onclick="searchThat()">
                <span class =" glyphicon glyphicon-search" ></span>
            </div>
        </form>
		<li><a href="iletisim.php">İletişim</a></li>
	  </ul>
	
	</div>
</div>
</nav>