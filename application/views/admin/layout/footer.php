
</div>
</div>
<!--footer-->
	<div class="footer">
	   <p>&copy; 2018 Glass Cup Enterprise. All Rights Reserved</p>		
	</div>
    <!--//footer-->
<!-- Classie --><!-- for toggle left push menu script -->
		<script src="<?php echo base_url(); ?>assets/dashboard/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url(); ?>assets/dashboard/js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>