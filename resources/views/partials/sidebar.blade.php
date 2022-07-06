<div class="container-fluid">
      <input type="checkbox" id="check">
      <label  class="d-md-block d-sm-block d-none" for="check">
        <i class="bi bi-list" id="btn"></i>
        <i class="bi bi-x" id="cancel"></i>
      </label> 
      <div class="row" style="height: 660px;">
        <div class="sidebar col-md-3 col-sm-3 d-md-block d-sm-block d-none" style="background-image: linear-gradient(to bottom left, #fffdd1,#fe8b8d);">
          <div class="row text-center">
            <div class="col-md-1 mt-5 mb-5">
              
            </div>
          </div>
              <div class="mt-2">
                <ul class="navbar-nav">
                  <li class="{{ ($title === "Home") ? 'active' : 'passive'}}">
                    <div class="my-4">
                      <a href="/" class="text-decoration-none text-white">
                        <h5><i class="bi bi-house-door text-white ms-5 me-3"></i>Home</h5>
                      </a>
                    </div>
                  </li>
                  <li class="{{ ($title === "Create mail") ? 'active' : 'passive'}}">
                    <div class="my-4">
                      <a href="./create" class="text-decoration-none text-white">
                        <h5><i class="bi bi-pencil ms-5 me-3"></i>Create Data Laptop</h5>
                      </a>
                    </div>
                  </li>             
                </ul>
              </div>            
        </div>
        <div class="col-md-3 col-sm-3 d-md-none d-sm-none d-block">
           <nav class="navbar tembus navbar-dark bg-info navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom" style="background-image: linear-gradient(to bottom left, #00dbde,#fc00ff);">
            <span class="nav-indicator"></span>
            <ul class="navbar-nav nav-justified w-100">
              <li class="nav-item {{ ($title === "Home") ? 'item-active' : 'item-passive'}}">
                <a href="/" class="nav-link text-decoration-none text-white">
                 <i class="bi bi-house-door text-white ms-5 me-3"></i>
                 <span class="title-passive d-block small ms-5 me-3">Home</span>
                </a>
              </li>
              <li class="nav-item  {{ ($title === "Create") ? 'item-active' : 'item-passive'}}">
                <a href="/create" class=" nav-link text-decoration-none text-white">
                  <i class="bi bi-house-door text-white ms-5 me-3"></i>
                  <span class="title-passive d-block small ms-5 me-3">Add</span>
                </a>
              </li>
            </ul>
          </nav>

        </div>
        <div class="home col-md-8 col-sm-8 col-12" style="background-image: linear-gradient(to bottom left,#fc00ff);">
              @yield('content')
        </div>
      </div>
    </div>