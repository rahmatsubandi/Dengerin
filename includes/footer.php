<div class="container">
	<div class="row">
		<div class="col-md-12">
			<hr>
			<footer>
<p class="pull-left">
&copy; <?php echo date('Y'); ?> <a href="<?php echo $site_url;?>" title="<?php echo $site_title;?>"><?php echo $site_title;?></a>
</p>
<p class="pull-right">
<a href="<?php echo $site_url;?>"><?php echo $footnav_home; ?></a> | <a rel="nofollow" href="<?php echo $site_url;?>/privacy-policy"><?php echo $footnav_privacy; ?></a> | <a rel="nofollow" href="<?php echo $site_url;?>/dmca"><?php echo $footnav_dmca; ?></a> | <a rel="nofollow" href="<?php echo $site_url;?>/contact"><?php echo $footnav_contact; ?></a>
</p>
</footer>
		</div>
	</div>
	<br><br>
</div>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="<?php echo $site_url;?>/js/bootstrap.min.js"></script>
<script type="text/javascript">var dsz = {"url":<?php echo json_encode($site_url); ?>};</script>
<script src="<?php echo $site_url;?>/js/custom.js"></script>
<?php if (!empty($addthis_id)): ?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo $addthis_id; ?>"></script>
<?php endif; ?>
<script src="<?php echo $site_url;?>/select/bootstrap-select.min.js"></script>
<p id="back-top"><a class="btn-primary" href="#top"><span class="glyphicon glyphicon-chevron-up"></span></a></p>
</body>
</html>