		 <!----footer-design------------->
		 
		 <footer class="footer" style="height: 145px; display:flex; align-items:center;">
		    <div class="container-fluid">
			   <div class="footer-in">
			      <p class="mb-0">&copy 2023 Johan . All Rights Reserved.</p>
			   </div>
			</div>
		 </footer>	 
	  </div>
</div>



<!-------complete html----------->

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
  
  <script type="text/javascript">
       $(document).ready(function(){
	      $(".xp-menubar").on('click',function(){
		    $("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		  });
		  
		  $('.xp-menubar,.body-overlay').on('click',function(){
		     $("#sidebar,.body-overlay").toggleClass('show-nav');
		  });

		  $('b.NumberAllUserShowing').text($('.AllUserShow').length);		  
	   });
  </script>
