
<!-- Footer -->
 <footer class="bg-light py-5">
    <div class="container">
		<?php
		if($footerInfo){
		?>
		<?php
		foreach ($footerInfo as $row) {
		?>
		<div class="small text-center text-muted"><?=$row->copyright_info?><br>
			বাস্তবায়নে : <a target="_blank" href="https://www.facebook.com/pg/Akter-official-148918459158846/posts/"><?=$row->developer_info?></a>
			যোগাযোগ :<a target="_blank" href="http://engineersit.com/index.php/home/about"><?=$row->developer_contact?></a>
		
		</div>
			<?php
			}
			?>
			<?php
			}
			?>
    </div>
</footer>
