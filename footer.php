<?php global $redux_indust;?>
	<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						
							<?php 
							if(is_active_sidebar('footer-1')){
								dynamic_sidebar('footer-1');
							}
							?>
						
						<section>
								<?php 
							if(is_active_sidebar('footer-2')){
								dynamic_sidebar('footer-2');
							}
							?>
						</section>
						<section>
							<?php 
							if(is_active_sidebar('footer-3')){
								dynamic_sidebar('footer-3');
							}
							?>
						</section>
					</div>
					<div class="copyright">
						&copy; <?php echo $redux_indust['copyright'];?>. Design by <a href="<?php echo $redux_indust['designby_url'];?>"><?php echo $redux_indust['designby'];?></a>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			
	</body>
	<?php wp_footer();?>
</html>