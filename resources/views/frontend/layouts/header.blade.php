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
    @media all and (min-width: 992px) {
	.dropdown-menu li{ position: relative; 	}
	.nav-item .submenu{ 
		display: none;
		position: absolute;
		left:100%; top:-7px;
	}
	.nav-item .submenu-left{ 
		right:100%; left:auto;
	}
	.dropdown-menu > li:hover{ background-color: #f1f1f1 }
	.dropdown-menu > li:hover > .submenu{ display: block; }
}	
/* ============ desktop view .end// ============ */

/* ============ small devices ============ */
@media (max-width: 991px) {
  .dropdown-menu .dropdown-menu{
      margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
  }
}
</style>
<div class="container-fluid" style="background: #0530AD">
<div class="header">
    <div class="row">
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
        <li class="nav-item dropdown" id="myDropdown">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Product Catalog  </a>
      <ul class="dropdown-menu">
      @foreach(getGroups() as $key => $group)
       
        @if(isset($group->categories))
        <li> <a class="dropdown-item"  href="{{ route('categories', $group->route) }}">{!! $group->name !!} </a>
        <ul class="submenu dropdown-menu">
        @foreach($group->categories->slice(0,9) as $key => $category)
        <li><a class="dropdown-item" href="{{ route('categories', $category->slug) }}">{!! isset($category->short_name)?$category->short_name:$category->name !!}</a>
        @if(count($category->sub_categories))
        <ul class="submenu dropdown-menu">
        @foreach($category->sub_categories as $key => $sub_category)
        <li><a class="dropdown-item" href="{{ route('categories', $sub_category->slug) }}">{!! isset($sub_category->short_name)?$sub_category->short_name:$sub_category->name !!}</a></li>  
        @endforeach
      </ul>
        @endif
        </li>
        @endforeach
      </ul>
</li>
        @endif
        <!-- <li> <a class="dropdown-item" href="#"> Dropdown item 2 &raquo; </a>
          <ul class="submenu dropdown-menu">
            <li><a class="dropdown-item" href="#">Submenu item 1</a></li>
            <li><a class="dropdown-item" href="#">Submenu item 2</a></li>
            <li><a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
              <ul class="submenu dropdown-menu">
                <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                <li><a class="dropdown-item" href="#">Multi level 2</a></li>
              </ul>
            </li>
            <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
            <li><a class="dropdown-item" href="#">Submenu item 5</a></li>
          </ul>
        </li>
        <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
        <li><a class="dropdown-item" href="#"> Dropdown item 4 </a></li> -->
        @endforeach
      </ul>
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
<script>
  document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth < 992) {

  // close all inner dropdowns when parent is closed
  document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
    everydropdown.addEventListener('hidden.bs.dropdown', function () {
      // after dropdown is hidden, then find all submenus
        this.querySelectorAll('.submenu').forEach(function(everysubmenu){
          // hide every submenu as well
          everysubmenu.style.display = 'none';
        });
    })
  });

  document.querySelectorAll('.dropdown-menu a').forEach(function(element){
    element.addEventListener('click', function (e) {
        let nextEl = this.nextElementSibling;
        if(nextEl && nextEl.classList.contains('submenu')) {	
          // prevent opening link if link needs to open dropdown
          e.preventDefault();
          if(nextEl.style.display == 'block'){
            nextEl.style.display = 'none';
          } else {
            nextEl.style.display = 'block';
          }

        }
    });
  })
}
// end if innerWidth
}); 
// DOMContentLoaded  end
</script>