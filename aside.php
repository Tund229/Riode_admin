<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
    <div class="app-brand">
              <a href="/index.php">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name">Riode Admin Panel</span>
              </a>
    </div>
            <!-- begin sidebar scrollbar -->
    <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Administration</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse show"  id="dashboard"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                            <li>
                              <?php
                                if(session_start() AND $_SESSION["admin_name"]=="Tunde"){
                                  
                              ?>
                              <li>
                                <a class="sidenav-item-link" href="admin-list.php">
                                  <span class="nav-text">Admin List</span>
                                </a>
                              </li>
                              <li>
                                <a class="sidenav-item-link" href="user-profile.php">
                                  <span class="nav-text"><?php echo $_SESSION["admin_name"];?></span>
                                </a>
                              </li>
                              
                              <?php
                                }else{
                              ?>
                              <li>
                                <a class="sidenav-item-link" href="user-profile.php">
                                  <span class="nav-text"><?php echo $_SESSION["admin_name"];?></span>
                                </a>
                              </li>
                             
                              <?php
                                }
                              ?>
                              
                            </li>
                      </div>
                    </ul>
                  </li>
                   <!--RIODE USERS-->
                  <li  class="has-sub">
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                        aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-folder-multiple-outline"></i>
                        <span class="nav-text">RIODE USERS</span> <b class="caret"></b>
                      </a>
                    
                    <ul  class="collapse"  id="ui-elements"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        <li>
                          <a class="sidenav-item-link" href="riode-users.php">
                            <span class="nav-text">Show Riode users list</span>
                          </a>
                        </li>
                        
                        
                      </div>
                    </ul>
                  </li>

                   <!-- COMMANDES-->
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">COMMANDES</span> <b class="caret"></b>
                   
                   
                    </a>
                    <ul  class="collapse"  id="charts"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                            <li >
                              <a class="sidenav-item-link" href="commandes.php">
                                <span class="nav-text">Commandes en cours</span>
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="commandes-validees.php">
                                <span class="nav-text">Commandes validées</span>
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
                
                <!-- Comptabilité-->
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                      aria-expanded="false" aria-controls="pages">
                      <i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">PRODUITS</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="pages"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                     
                            <li >
                              <a class="sidenav-item-link" href="categories.php">
                                <span class="nav-text">Add categories</span>
                                
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="user-profile.html">
                                <span class="nav-text">Add produits</span>
                                
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
              </ul>

    </div>
    </div>
</aside>