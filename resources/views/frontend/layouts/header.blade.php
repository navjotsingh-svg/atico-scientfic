<style>
    .header{
        background: #0530AD;
        padding: 8px;;
    }
    .desktop-view{
      padding-left:250px;
    }
    li.nav-item {
    margin-left: 28px;
}
a.nav-link.active {
    color: orange !important;
    border-bottom: 1px solid;
}
.logo{
  width: 200px;
    margin-left: 100px;
}
a.nav-link {
    color: #0530AD !important;
    font-weight: 500;
}
    @media only screen and (max-width: 600px) {
      .desktop-view{
      padding-left:0px;
    }
    .logo{
  width: 200px;
  margin-left: 20px;
    
}
    li.nav-item {
    margin-left: 4px;
}
    }
</style>
<div class="header ">
    <div class="row ">
            <div class="col-md-7" align="center">
                    <select style="background: #0530AD;;border-color: #0530AD;color:#fff;">
                        <option value="">Select Language</option>
                    </select>
            </div>  
            <div class="col-md-5" align="right">
                    <span style="color:#fff;"><img src="{{ asset('assets/images/email_icon.png') }}"> info@mechanicallabequipments.com</span>
                    <span style="color:#fff;margin-left:20px">|</span>
                    <span style="color:#fff;margin-left:20px"><img src="{{ asset('assets/images/email_icon.png') }}"> Send Enquiry</span>
            </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="logo" src="{{ asset('assets/images/logo.png') }}"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 desktop-view">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product Catalog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Lab Tenders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        
        
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>