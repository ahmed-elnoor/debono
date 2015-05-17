<!--
Yay Sidebar
Options [you can use all of theme classnames]:
  .yay-hide-to-small         - no hide menu, just set it small with big icons
  .yay-static                - stop using fixed sidebar (will scroll with content)
  .yay-gestures              - to show and hide menu using gesture swipes
  .yay-light                 - light color scheme
  .yay-hide-on-content-click - hide menu on content click
 
Effects [you can use one of these classnames]:
  .yay-overlay  - overlay content
  .yay-push     - push content to right
  .yay-shrink   - shrink content width
-->
<aside class="yaybar yay-shrink yay-hide-to-small yay-gestures">
 
  <div class="top">
    <div>
      <!-- Sidebar toggle -->
      <a href="#" class="yay-toggle">
        <div class="burg1"></div>
        <div class="burg2"></div>
        <div class="burg3"></div>
      </a>
      <!-- Sidebar toggle -->
 
      <!-- Logo -->
      <a href="#!" class="brand-logo">
        <img src="assets/_con/images/logo-white.png" alt="Con">
      </a>
      <!-- /Logo -->
    </div>
  </div>
 
 
  <div class="nano">
    <div class="nano-content">
 
      <ul>
        <li class="label">Menu</li>
        <li>
          <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-dashboard"></i> لوحة التحكم<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
      



            <li>
              <a href="dashboard.html" class="waves-effect waves-blue"> Dashboard <span class="badge new"></span></a>
            </li>
            <li>
              <a href="dashboard-v1.html" class="waves-effect waves-blue"> Dashboard v1</a>
            </li>
          </ul>
        </li>



    <li class="label">أقسام الموقع </li>

    <!-- start  -->
        <li>
          <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa mdi-social-public"></i>البوابة الإعلاميه<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
         
            <li><a class="waves-effect waves-blue" 
              href="{{ URL::to('adminPanel/topic/create/media_gate')}}"><i class="fa mdi-editor-border-color"></i> أضف جديد </a>
            </li>

            <li><a class="waves-effect waves-blue" href="{{ URL::to('adminPanel/topic/all/media_gate')}}"><i class="fa mdi-action-theaters"></i> عرض الكل</a>
            </li>

          </ul>
        </li>
<!-- end -->


    <!-- start  -->
        <li>
          <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa mdi-action-wallet-travel"></i>الحقيبة التدريبية<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
         
            <li><a class="waves-effect waves-blue" href="{{ URL::to('adminPanel/topic/create/traning_package')}}"><i class="fa mdi-editor-border-color"></i> أضف جديد </a>
            </li>

            <li><a class="waves-effect waves-blue" href="{{ URL::to('adminPanel/topic/all/traning_package')}}"><i class="fa mdi-action-theaters "></i> عرض الكل</a>
            </li>

          </ul>
        </li>
<!-- end -->


    <!-- start  -->
        <li>
          <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa mdi-image-center-focus-weak"></i>المراكز التدريبيه<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
         
            <li><a class="waves-effect waves-blue" href="{{ URL::to('adminPanel/topic/create/traning_centers')}}"><i class="fa mdi-editor-border-color"></i> أضف جديد </a>
            </li>

            <li><a class="waves-effect waves-blue" href="{{ URL::to('adminPanel/topic/all/traning_centers')}}"><i class="fa mdi-action-theaters"></i> عرض الكل</a>
            </li>

          </ul>
        </li>
<!-- end -->


    <!-- start  -->
        <li>
          <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa mdi-image-grid-on"></i>الجداول التدريبية<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
         
            <li><a class="waves-effect waves-blue" href="{{ URL::to('adminPanel/topic/create/traning_tabels')}}"><i class="fa mdi-editor-border-color"></i> أضف جديد </a>
            </li>

            <li><a class="waves-effect waves-blue" href="{{ URL::to('adminPanel/topic/all/traning_tabels')}}"><i class="fa mdi-action-theaters"></i> عرض الكل</a>
            </li>

          </ul>
        </li>
<!-- end -->




    <!-- start  -->
        <li>
          <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa mdi-social-school"></i>موسوعة البحوث والدراسات<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
         
            <li><a class="waves-effect waves-blue" href="{{ URL::to('adminPanel/topic/create/research_library') }}"><i class="fa mdi-editor-border-color"></i> أضف جديد </a>
            </li>

            <li><a class="waves-effect waves-blue" href="{{ URL::to('adminPanel/topic/all/research_library') }}"><i class="fa mdi-action-theaters"></i> عرض الكل</a>
            </li>

          </ul>
        </li>
<!-- end -->


    <!-- start  -->
        <li>
          <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa mdi-action-shopping-basket"></i>خدمات أكاديمية ديبونو <span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
         
            <li><a class="waves-effect waves-blue" href="{{ URL::to('adminPanel/topic/create/services') }}"><i class="fa mdi-editor-border-color"></i> أضف جديد </a>
            </li>

            <li><a class="waves-effect waves-blue" href="{{ URL::to('adminPanel/topic/create/services') }}"><i class="fa mdi-action-theaters"></i> عرض الكل</a>
            </li>

          </ul>
        </li>
<!-- end -->


  
 
        <li class="label">Extra</li>
        <li>
          <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-envelope"></i> Mailbox<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li><a class="waves-effect waves-blue" href="mail-inbox.html"><i class="mdi-content-inbox"></i> Inbox</a>
            </li>
            <li><a class="waves-effect waves-blue" href="mail-compose.html"><i class="mdi-content-add-circle"></i> Compose</a>
            </li>
            <li><a class="waves-effect waves-blue" href="mail-view.html"><i class="mdi-content-drafts"></i> View</a>
            </li>
          </ul>
        </li>
 
        <li>
          <a class="yay-sub-toggle waves-effect waves-blue"><i class="mdi mdi-action-shopping-cart"></i> eCommerce<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li><a class="waves-effect waves-blue" href="ecommerce-dashboard.html"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li><a class="waves-effect waves-blue" href="ecommerce-products.html"><i class="fa fa-tags"></i> Products</a>
            </li>
            <li><a class="waves-effect waves-blue" href="ecommerce-product-single.html"><i class="fa fa-tag"></i> Product Single</a>
            </li>
            <li><a class="waves-effect waves-blue" href="ecommerce-orders.html"><i class="fa fa-cart-plus"></i> Orders</a>
            </li>
            <li><a class="waves-effect waves-blue" href="ecommerce-order-single.html"><i class="fa fa-cart-plus"></i> Order Single</a>
            </li>
            <li><a class="waves-effect waves-blue" href="ecommerce-customers.html"><i class="fa fa-users"></i> Customers</a>
            </li>
            <li><a class="waves-effect waves-blue" href="ecommerce-settings.html"><i class="fa fa-cog"></i> Settings</a>
            </li>
            <li><a class="waves-effect waves-blue" href="ecommerce-invoice.html"><i class="ion ion-android-list"></i> Invoice</a>
            </li>
          </ul>
        </li>
 
        <li>
          <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-bar-chart"></i> Charts<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li><a class="waves-effect waves-blue" href="charts-flot.html">Flot</a>
            </li>
            <li><a class="waves-effect waves-blue" href="charts-rickshaw.html">Rickshaw</a>
            </li>
            <li><a class="waves-effect waves-blue" href="charts-sparkline.html">Sparkline</a>
            </li>
            <li><a class="waves-effect waves-blue" href="charts-nvd3.html">NVD3</a>
            </li>
          </ul>
        </li>
 
        <li>
          <a class="yay-sub-toggle waves-effect waves-blue"><i class="mdi mdi-maps-place"></i> Maps<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
          <ul>
            <li><a class="waves-effect waves-blue" href="maps-google.html">Google Maps</a>
            </li>
            <li><a class="waves-effect waves-blue" href="maps-vector.html">Vector Maps</a>
            </li>
          </ul>
        </li>
 
        <li class="label">Stats</li>
        <li class="content">
          <span><i class="fa fa-spinner"></i> Server Load</span>
          <div class="progress small light-green lighten-4">
            <div class="light-green accent-5" style="width: 37%"></div>
          </div>
 
          <span><i class="fa fa-thumbs-o-up"></i> User Satisfaction</span>
          <div class="progress small">
            <div style="width: 91%"></div>
          </div>
        </li>
      </ul>
 
    </div>
  </div>
</aside>


  <!-- Main Content -->
  <section class="content-wrap ecommerce-customers">


<!-- Breadcrumb -->
    <div class="page-title">

      <div class="row">
        <div class="col s12 m9 l10">
          
          <ul>
            <li>
              <a href="#"><i class="fa fa-home"></i> الرئيسية</a>  <i class="fa fa-angle-left"></i>
            </li>

            <li><a href='dashboard.html'>لوحة التحكم</a>  <i class='fa fa-angle-left'></i>
            </li>
            <li><a href='widgets.html'>إضافة موضوع جديد</a>
            </li>
          </ul>
        </div>
        <div class="col s12 m3 l2 right-align">
          <a href="#!" class="btn grey lighten-3 grey-text z-depth-0 chat-toggle"><i class="fa fa-comments"></i></a>
        </div>
      </div>

    </div>
    <!-- /Breadcrumb -->
