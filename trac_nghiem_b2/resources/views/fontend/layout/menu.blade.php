<div class="menu">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid" id="menu">
	    <a href="home.html"><img src="font/image/Logo1.png" width="110px" height="100px"></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Trang Chủ</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="{{url('thithu')}}">Thi Thử</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="{{url('lythuyet')}}">Lý Thuyết</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="{{url('lienhe')}}">Liên Hệ</a>
		        </li>
	      	 
	        </ul>
	        
	      
	    </div>
		
	   <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" style="padding-right: 50px">
	      <ul class="navbar-nav">
	      	@if(Auth::check()) 
	        <li class="nav-item dropdown" style="">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	           <p style="font-size: 14px;">{{Auth::user()->email}}</p>
	          </a>
	          <ul class="dropdown-menu " aria-labelledby="navbarDarkDropdownMenuLink" style="">
	            <li><a class="dropdown-item" href="{{url('editacc')}}">Sửa thông tin</a></li>
	            <li><a class="dropdown-item" href="{{url('logout')}}">Đăng xuất</a></li>
	            
	          </ul>
	        </li>
	        @else
	       
	          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	            <li class="nav-item"><a class="nav-link active" href="{{url('login')}}">Đăng nhập</a></li> 
	          </ul>
	        
	        @endif
	      </ul>
	    </div>
	  </div>

	</nav>
</div>