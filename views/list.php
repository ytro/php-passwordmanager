<!--
Author: Yann Trottier
File  : views/list.php
Desc. : Main page loaded by controller on start. Displays passwords table.
-->

<div class="container">
	<div id="page-title"><h1>Password manager</h1></div>
	<a class="btn pull-right btn-info" data-toggle="modal" tohref="<?php echo $create ?>">New Password</a>
	<div id="box">
		
		<!-- Begin Table -->
		<table class="table table-striped table-bordered table-condensed table-hover">
			<!-- Table header -->
			<thead>
			<tr>
			<th><center><h4><?php echo $columns['password_name'];?></h4></center></th>
			<?php foreach ($actions as $action): ?>
				<th></th>
			<?php endforeach; ?>	
			</tr>
			</thead>

			<!-- Main table -->
			<tbody>
			<?php for ($i = 0; $i < count($data); $i++): reset($actions); ?>
				<tr>
				<td><?php echo $data[$i]['password_name'];?></td>
				<?php while($action = current($actions)):?>
					<td><a class="btn btn-block" data-toggle="modal" tohref="<?php echo $action . $data[$i]['password_id']; ?>">
					<?php echo key($actions); next($actions); ?>
					</a></td>
				<?php endwhile; ?>
				</tr>
			<?php endfor; ?>
			</tbody>
		</table>
		<!-- End table -->
		
	</div>
</div>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<!-- Content will be inserted here by jQuery function -->
</div>
