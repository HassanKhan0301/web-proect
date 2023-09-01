  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                 
                    
                              
                            
                       
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"  
                                      onclick="event.preventDefault(); 
                                      document.getElementById('logout-form').submit();"> 
                                      {{ __('Logout') }}
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            
            
                                
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

