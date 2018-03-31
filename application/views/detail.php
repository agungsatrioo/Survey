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
		<div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col" style="height:20%;">
			<div class="mdl-card__title mdl-color--blue-grey-600 ">
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
		<div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--8-col">
			<div class="mdl-card__title mdl-color--blue-grey-900">
                <h2 class="mdl-card__title-text">Hasil Survey</h2>
			</div>
			<div class="mdl-card__supporting-text">
                <ul class="demo-list-icon mdl-list">
                    <li class="mdl-list__item">
                        <table>
                            <tr>
                                <td>
                                    <h4>Kemudahan prosedur/pelayanan di Kecamatan Cinambo</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                                                    <?php 
                                                                        if($data['mudah'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Mudah</span></span>';
                                                                        else if($data['mudah'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Mudah</span></span>';
                                                                        else if($data['mudah'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Mudah</span></span>';
                                                                        else if($data['mudah'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Mudah</span></span>';
                                                                    ?>
                                </td>
                            </tr>
                        </table>
                    </li><br><hr>
                    <li class="mdl-list__item">
                        <table>
                            <tr>
                                <td>
                                    <h4>Kesesuaian persyaratan pelayanan dengan jenis pelayanannya</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                                                    <?php 
                                                                        if($data['sesuai'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Sesuai</span></span>';
                                                                        else if($data['sesuai'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Sesuai</span></span>';
                                                                        else if($data['sesuai'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Sesuai</span></span>';
                                                                        else if($data['sesuai'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Sesuai</span></span>';
                                                                    ?>
                                </td>
                            </tr>
                        </table>
                    </li><br><hr>
                    <li class="mdl-list__item">
                        <table>
                            <tr>
                                <td>
                                    <h4>Kepastian persyaratan pelayanan dengan jenis pelayanannya</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                                                    <?php 
                                                                        if($data['pasti'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Pasti</span></span>';
                                                                        else if($data['pasti'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Pasti</span></span>';
                                                                        else if($data['pasti'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Pasti</span></span>';
                                                                        else if($data['pasti'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Pasti</span></span>';
                                                                    ?>
                                </td>
                            </tr>
                        </table>
                    </li><br><hr>
                    <li class="mdl-list__item">
                        <table>
                            <tr>
                                <td>
                                    <h4>Kedisiplinan petugas dalam membantu pelayanan</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                                                    <?php 
                                                                        if($data['disiplin'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Disiplin</span></span>';
                                                                        else if($data['disiplin'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Disiplin</span></span>';
                                                                        else if($data['disiplin'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Disiplin</span></span>';
                                                                        else if($data['disiplin'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Disiplin</span></span>';
                                                                    ?>
                                </td>
                            </tr>
                        </table>
                    </li><br><hr>
                    <li class="mdl-list__item">
                        <table>
                            <tr>
                                <td>
                                    <h4>Tanggung Jawab petugas dalam memberikan pelayanan</h4>
                                                                    <?php 
                                                                        if($data['petugas'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Bertanggung Jawab</span></span>';
                                                                        else if($data['petugas'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Bertanggung Jawab</span></span>';
                                                                        else if($data['petugas'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Bertanggung Jawab</span></span>';
                                                                        else if($data['petugas'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Bertanggung Jawab</span></span>';
                                                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                            </tr>
                        </table>
                    </li><br><hr>
                    <li class="mdl-list__item">
                        <table>
                            <tr>
                                <td>
                                    <h4>Kemampuan petugas dalam memberikan pelayanan</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                                                    <?php 
                                                                        if($data['mampu'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Mampu</span></span>';
                                                                        else if($data['mampu'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Mampu</span></span>';
                                                                        else if($data['mampu'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Mampu</span></span>';
                                                                        else if($data['mampu'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Mampu</span></span>';
                                                                    ?>
                                </td>
                            </tr>
                        </table>
                    </li><br><hr>
                    <li class="mdl-list__item">
                        <table>
                            <tr>
                                <td>
                                    <h4>Kecepatan pelayanan di Kecamatan Cinambo ini</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                                                    <?php 
                                                                        if($data['cepat'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Cepat</span></span>';
                                                                        else if($data['cepat'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Cepat</span></span>';
                                                                        else if($data['cepat'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Cepat</span></span>';
                                                                        else if($data['cepat'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Cepat</span></span>';
                                                                    ?>
                                </td>
                            </tr>
                        </table>
                    </li><br><hr>
                    <li class="mdl-list__item">
                        <table>
                            <tr>
                                <td>
                                    <h4>Keadilan untuk mendapatkan pelayanan di Kecamatan Cinambo</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                                                    <?php 
                                                                        if($data['adil'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Adil</span></span>';
                                                                        else if($data['adil'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Adil</span></span>';
                                                                        else if($data['adil'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Adil</span></span>';
                                                                        else if($data['adil'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Adil</span></span>';
                                                                    ?>
                                </td>
                            </tr>
                        </table>
                    </li><br><hr>
                    <li class="mdl-list__item">
                        <table>
                            <tr>
                                <td>
                                    <h4>Kesopanan dan keramahan dalam mendapatkan pelayanan</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                                                    <?php 
                                                                        if($data['sopan'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Sopan</span></span>';
                                                                        else if($data['sopan'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Sopan</span></span>';
                                                                        else if($data['sopan'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Sopan</span></span>';
                                                                        else if($data['sopan'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Sopan</span></span>';
                                                                    ?>
                                </td>
                            </tr>
                        </table>
                    </li><br><hr>
                    <li class="mdl-list__item">
                        <table>
                            <tr>
                                <td>
                                    <h4>Kewajaran biaya untuk mendapatkan pelayanan</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                                                    <?php 
                                                                        if($data['wajar'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Wajar</span></span>';
                                                                        else if($data['wajar'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Wajar</span></span>';
                                                                        else if($data['wajar'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Wajar</span></span>';
                                                                        else if($data['wajar'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Wajar</span></span>';
                                                                    ?>
                                </td>
                            </tr>
                        </table>
                    </li><br><hr>
                    <li class="mdl-list__item">
                        <table>
                            <tr>
                                <td>
                                    <h4>Kesesuaian antara biaya yang dibayarkan dengan biaya yang telah ditetapkan</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                                                    <?php 
                                                                        if($data['sesuai2'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Sesuai</span></span>';
                                                                        else if($data['sesuai2'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Sesuai</span></span>';
                                                                        else if($data['sesuai2'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Sesuai</span></span>';
                                                                        else if($data['sesuai2'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Sesuai</span></span>';
                                                                    ?>
                                </td>
                            </tr>
                        </table>
                    </li><br><hr>
                    <li class="mdl-list__item">
                        <table>
                            <tr>
                                <td>
                                    <h4>Ketepatan pelaksanaan terhadap jadwal waktu pelaksanaan</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                                                    <?php 
                                                                        if($data['tepat'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Tepat</span></span>';
                                                                        else if($data['tepat'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Tepat</span></span>';
                                                                        else if($data['tepat'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Tepat</span></span>';
                                                                        else if($data['tepat'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Tepat</span></span>';
                                                                    ?>
                                </td>
                            </tr>
                        </table>
                    </li><br><hr>
                    <li class="mdl-list__item">
                        <table>
                            <tr>
                                <td>
                                    <h4>Kenyamanan pelayanan di Kecamatan Cinambo</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                                                    <?php 
                                                                        if($data['nyaman'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Nyaman</span></span>';
                                                                        else if($data['nyaman'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Nyaman</span></span>';
                                                                        else if($data['nyaman'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Nyaman</span></span>';
                                                                        else if($data['nyaman'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Nyaman</span></span>';
                                                                    ?>
                                </td>
                            </tr>
                        </table>
                    </li><br><hr>
                    <li class="mdl-list__item">
                        <table>
                            <tr>
                                <td>
                                    <h4>Keamanan pelayanan di Kecamatan Cinambo</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                                                    <?php 
                                                                        if($data['aman'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Aman</span></span>';
                                                                        else if($data['aman'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Aman</span></span>';
                                                                        else if($data['aman'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Aman</span></span>';
                                                                        else if($data['aman'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Aman</span></span>';
                                                                    ?>
                                </td>
                            </tr>
                        </table>
                    </li>
                </ul>
            </div>
		</div>
	</div>
</main>
<?php } ?>
