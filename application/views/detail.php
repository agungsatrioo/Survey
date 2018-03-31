<style>
	.demo-card-wide>.mdl-card__title {
		color: #fff;
		height: 176px;
	}

	.demo-card-wide>.mdl-card__menu {
		color: #fff;
	}

</style>


<?php foreach($data as $data){ ?>
<main class="mdl-layout__content mdl-color--grey-100">
	<div class="mdl-grid demo-content">
		<div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--3-col" style="height:20%;">
			<div class="mdl-card__title mdl-color--light-blue-900">
				<h2 class="mdl-card__title-text">
					<?php echo $data['nama']; ?>
				</h2>
			</div>
			<div class="mdl-card__supporting-text">
				<table>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>
							<?php echo $data['jk'];?>
						</td>
					</tr>
					<tr>
						<td>Usia</td>
						<td>:</td>
						<td>
							<?php echo $data['umur'];?>
						</td>
					</tr>
					<tr>
						<td>Pendidikan</td>
						<td>:</td>
						<td>
							<?php echo $data['pt'];?>
						</td>
					</tr>
					<tr>
						<td>Pekerjaan</td>
						<td>:</td>
						<td>
							<?php echo $data['pu'];?>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--9-col">
			<div class="mdl-card__title mdl-color--light-blue-900">
				<h2 class="mdl-card__title-text">Hasil Survey</h2>
			</div>
			<div class="mdl-card__supporting-text">
				<ul class="demo-list-icon mdl-list">
					<li class="mdl-list__item">Kemudahan prosedur/pelayanan di Kecamatan Cinambo :
						<?php 
                            if($data['mudah'] == 1) echo 'Tidak Mudah';
                            else if($data['mudah'] == 2) echo 'Kurang Mudah';
                            else if($data['mudah'] == 3) echo 'Mudah';
                            else if($data['mudah'] == 4) echo 'Sangat Mudah';
                        ?>
					</li>
					<li class="mdl-list__item">
                        Kesesuaian persyaratan pelayanan dengan jenis pelayanannya :
				        <?php 
                            if($data['sesuai'] == 1) echo 'Tidak Sesuai';
                            else if($data['sesuai'] == 2) echo 'Kurang Sesuai';
                            else if($data['sesuai'] == 3) echo 'Sesuai';
                            else if($data['sesuai'] == 4) echo 'Sangat Sesuai';
                        ?>
					</li>
                    <li class="mdl-list__item">
                        Kedisiplinan petugas dalam membantu pelayanan :
                        <?php 
                            if($data['disiplin'] == 1) echo 'Tidak Disiplin';
                            else if($data['disiplin'] == 2) echo 'Kurang Disiplin';
                            else if($data['disiplin'] == 3) echo 'Disiplin';
                            else if($data['disiplin'] == 4) echo 'Sangat Disiplin';
                        ?>
                    </li>
                    <li class="mdl-list__item">
                        Kemampuan petugas dalam memberikan pelayanan :
				        <?php 
                            if($data['mampu'] == 1) echo 'Tidak Mampu';
                            else if($data['mampu'] == 2) echo 'Kurang Mampu';
                            else if($data['mampu'] == 3) echo 'Mampu';
                            else if($data['mampu'] == 4) echo 'Sangat Mampu';
                        ?>
                    </li>    
                    <li class="mdl-list__item">
                        Kecepatan pelayanan di Kecamatan Cinambo ini : 
				        <?php 
                            if($data['cepat'] == 1) echo 'Tidak Cepat';
                            else if($data['cepat'] == 2) echo 'Kurang Cepat';
                            else if($data['cepat'] == 3) echo 'Cepat';
                            else if($data['cepat'] == 4) echo 'Sangat Cepat';
                        ?>
                    </li>
                    <li class="mdl-list__item">
                        Keadilan untuk mendapatkan pelayanan di Kecamatan Cinambo ini :
				        <?php 
                            if($data['adil'] == 1) echo 'Tidak Adil';
                            else if($data['adil'] == 2) echo 'Kurang Adil';
                            else if($data['adil'] == 3) echo 'Adil';
                            else if($data['adil'] == 4) echo 'Sangat Adil';
                        ?>
                    </li>    
                    <li class="mdl-list__item">
                        Kesopanan dan keramahan dalam mendapatkan pelayanan :
				        <?php 
                            if($data['sopan'] == 1) echo 'Tidak Sopan';
                            else if($data['sopan'] == 2) echo 'Kurang Sopan';
                            else if($data['sopan'] == 3) echo 'Sopan';
                            else if($data['sopan'] == 4) echo 'Sangat Sopan';
                        ?>
                    </li>    
                    <li class="mdl-list__item">
                        Kewajaran biaya untuk mendapatkan pelayanan : 
				        <?php 
                            if($data['wajar'] == 1) echo 'Tidak Wajar';
                            else if($data['wajar'] == 2) echo 'Kurang Wajar';
                            else if($data['wajar'] == 3) echo 'Wajar';
                            else if($data['wajar'] == 4) echo 'Sangat Wajar';
                        ?>
                    </li>    
                    <li class="mdl-list__item">
                        Kesesuaian antara biaya yang dibayarkan dengan biaya yang telah ditetapkan : 
				        <?php 
                            if($data['sesuai2'] == 1) echo 'Tidak Sesuai';
                            else if($data['sesuai2'] == 2) echo 'Kurang Sesuai';
                            else if($data['sesuai2'] == 3) echo 'Sesuai';
                            else if($data['sesuai2'] == 4) echo 'Sangat Sesuai';
                        ?>
                    </li>    
                    <li class="mdl-list__item">
                        Ketepatan pelaksanaan terhadap jadwal waktu pelaksanaan : 
				        <?php 
                            if($data['tepat'] == 1) echo 'Tidak Tepat';
                            else if($data['tepat'] == 2) echo 'Kurang Tepat';
                            else if($data['tepat'] == 3) echo 'Tepat';
                            else if($data['tepat'] == 4) echo 'Sangat Tepat';
                        ?>
                    </li>    
                    <li class="mdl-list__item">
                        Keamanan pelayanan di Kecamatan Cinambo :
				        <?php 
                            if($data['aman'] == 1) echo 'Tidak Aman';
                            else if($data['aman'] == 2) echo 'Kurang Aman';
                            else if($data['aman'] == 3) echo 'Aman';
                            else if($data['aman'] == 4) echo 'Sangat Aman';
                        ?>
                    </li>    
				</ul>
			</div>
		</div>  
	</div>
</main>
<?php } ?>
