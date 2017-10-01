<li><a href="#" data-toggle="modal" data-target="#id01">ĐĂNG NHẬP</a></li>	
<div id="id01" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
		<form method="post" action="<?php echo base_url('home/login'); ?>">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">ĐĂNG NHẬP</h4>
				</div>

				<div class="modal-body">
					<div class="form-group">
						<label><b>Email</b></label>
						<input type="email" class="form-control" placeholder="Nhập Email" name="mail" required>
					</div>
					<div class="form-group">
						<label><b>Mật khẩu</b></label>
						<input type="password" class="form-control" placeholder="Nhập mật khẩu" name="pass" required>
					</div>
					<input type="checkbox" checked="checked"> Ghi nhớ	
				</div>
				<div class="modal-footer">
					<button type="submit" name="login" class="btn btn-primary" style="float: left">Đăng nhập</button>
					<span class="psw">Quên <a href="#">mật khẩu?</a></span>
				</div>
			</div>
		</form>
	</div>
</div>
<li><a href="#" data-toggle="modal" data-target="#id02">ĐĂNG KÝ</a></li>	
<div id="id02" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
		<form action="../admin/modules/quanlyuser/themuser.php" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">ĐĂNG KÝ</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label><b>Email</b></label>
						<input type="email" class="form-control" placeholder="Nhập Email" name="mail" required>
					</div>
					<div class="form-group">
						<label><b>Mật khẩu</b></label>
						<input type="password" class="form-control" placeholder="Nhập mật khẩu" name="pass" required>
					</div>
					<div class="form-group">
						<label><b>Nhập lại mật khẩu</b></label>
						<input type="password" class="form-control" placeholder="Nhập lại mật khẩu" name="re-pass" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-lg btn-primary btn-block">Đăng ký</button>
				</div>
			</div>
		</form>
	</div>
</div>