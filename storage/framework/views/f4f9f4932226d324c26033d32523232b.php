 <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">
      <div class="h-100" data-simplebar>
        <!-- User box -->
        <div class="user-box text-center">
          <img src="<?php echo e(asset('public/assets/images/users/user-1.jpg')); ?>" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md" />
          <p class="text-muted mt-2">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
          <ul id="side-menu">
            

            <li>
              <a href="<?php echo e(url('/')); ?>" >
                <i data-feather="home"></i>
                <span> Dashboard </span>
                
              </a>
              <a href="#sidebarEcommerce" data-toggle="collapse">
                <i data-feather="users"></i>
                <span> Parties </span>
                <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarEcommerce">
                <ul class="nav-second-level">
                  <li>
                    <a href="<?php echo e(route('add-party')); ?>"><i data-feather="plus" class="pr-0 mr-1"></i>Add
                      New</a>
                  </li>
                  <li>
                    <a href="<?php echo e(route('manage-parties')); ?>"><i data-feather="list" class="pr-0 mr-1"></i>Manage
                      Parties</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#sidebarCrm" data-toggle="collapse">
                <i data-feather="edit"></i>
                <span> GST Billing </span>
                <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarCrm">
                <ul class="nav-second-level">
                  <li>
                    <a href="<?php echo e(route('add-gst-bill')); ?>"><i data-feather="plus" class="pr-0 mr-1"></i>Create
                      bill</a>
                  </li>
                  <li>
                    <a href="<?php echo e(route('manage-gst-bill')); ?>"><i data-feather="list" class="pr-0 mr-1"></i>Manage all
                      bills</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
      </div>
      <!-- Sidebar -left -->
    </div>
    <!-- Left Sidebar End --><?php /**PATH C:\xampp\htdocs\laravel-project\gst_billing\resources\views/include/sidebar.blade.php ENDPATH**/ ?>