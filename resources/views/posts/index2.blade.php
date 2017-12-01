@extends('layouts.app')
 @section('content')
<body>
<div class="wrapper">
 
    <div class="maincontent">
      <ul class="tabs">
            <li><a href="#tab1">AllPosts</a></li>
            <li><a href="#tab2">Perfil</a></li>
            <li><a href="#tab3">Postea</a></li>
            <li><a href="#tab4">Seguidores</a></li>
      </ul>

        <div class="tab_container">
            <div id="tab1" class="tab_content">
                <div class="post">
            </div><!--End Blog Post-->

            <div class="post">
                  </div><!--End Blog Post-->         
            </div><!--End Tab 1-->
        
             <div id="tab2" class="tab_content">
             </div><!--End Tab 2 -->
               
             <div id="tab3" class="tab_content">
             </div><!--End Tab 3 -->
               
              <div id="tab4" class="tab_content">
              </div><!--End Tab 4 -->
           

        </div><!--End Tab Container -->
     
     </div><!--End Main Content-->
     
    <div class="sidebar">
    </div><!--End Sidebar-->
 
</div><!--End Wrapper -->
 @endsection