<main class="mdl-layout__content mdl-color--grey-100">
	<div class="mdl-grid demo-content">
		<div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--4-col" style="height:0%;">
			<!-- Input Data -->
			<form action="<?php echo base_url();?>index.php/crud/tambah_data" method="post">
				<!-- Nama -->
				<h4>Nama</h4>
				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" name="nama" id="nama" type="text" pattern="-?[a-z]*(\.[A-Z]+)?">
					<label class="mdl-textfield__label" for="nama">Masukan Nama</label>
					<span class="mdl-textfield__error">Masukan nama yang benar</span>
				</div>
				<br>
				
				<!-- Umur -->
				<h4>Umur</h4>
				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" name="umur" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="umur">
					<label class="mdl-textfield__label" for="umur">Masukan Umur</label>
					<span class="mdl-textfield__error">Masukan umur yang benar</span>
				</div>

				<!-- Jenis Kelamin -->
				<table>
					<h4>Jenis Kelamin</h4>
					<tr>
						<td>
							<p>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="laki">
									<input type="radio" name="jk" id="laki" class="mdl-radio__button" value="Laki Laki" required>
									<span class="mdl-radio__label">Laki Laki</span>
								</label>
							</p>	
						</td>
					</tr>    
					<tr>
						<td>
							<p>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pr">
									<input type="radio" name="jk" id="pr" class="mdl-radio__button" value="Perempuan" required>
									<span class="mdl-radio__label">Perempuan</span>
								</label>
							</p>
						</td>
					</tr>
				</table>

				<!-- Pendidikan Terakhir -->
				<table>
					<h4>Pendidikan Terakhir</h4>
					<tr>
						<td>
							<p>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="ts">
									<input class="mdl-radio__button" type="radio" name="pt" id="ts" value="Tidak Sekolah" required>
									<span class="mdl-radio__label">Tidak Sekolah</span>
								</label>
							</p>	
                        </td>
                    </tr>
                    <tr>    
						<td>
							<p>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="sd">
									<input class="mdl-radio__button" type="radio" name="pt" id="sd" value="SD Sederajat" required>
									<span class="mdl-radio__label">SD Sederajat</span>
								</label>
							</p>							
						</td>
                    </tr>
                    <tr>    
                        <td>
							<p>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="smp">
								<input class="mdl-radio__button" type="radio" name="pt" id="smp" value="SLTP Sederajat" required>
								<span class="mdl-radio__label">SLTP Sederajat</span>
							</label>
							</p>
						</td>
                    </tr>
                    <tr>    
                        <td>
							<p>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="sma">
								<input class="mdl-radio__button" type="radio" name="pt" id="sma" value="SLTA Sederajat" required>
								<span class="mdl-radio__label">SLTA Sederajat</span>
							</label>
							</p>
						</td>
                    </tr>
                    <tr>    
						<td>
							<p>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="d">
								<input class="mdl-radio__button" type="radio" name="pt" id="d" value="Diploma" required>
								<span class="mdl-radio__label">Diploma</span>
							</label>
							</p>
						</td>
                    </tr>
                    <tr>    
						<td>
							<p>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="S1">
								<input class="mdl-radio__button" type="radio" name="pt" id="S1" value="S1" required>
								<span class="mdl-radio__label">S1</span>
							</label>
							</p>
						</td>
                    </tr>
                    <tr>    
						<td>
							<p>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="S2">
								<input class="mdl-radio__button" type="radio" name="pt" id="S2" value="S2" required>
								<span class="mdl-radio__label">S2</span>
							</label>
							</p>
						</td>
                    </tr>
                    <tr>    
						<td>
							<p>
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="S3">
									<input class="mdl-radio__button" type="radio" name="pt" id="S3" value="S3" required>
									<span class="mdl-radio__label">S3</span>
								</label>
							</p>
						</td>    
					</tr>
				</table>

                <!-- Pekerjaan Utama -->
				<table>
					<h4>Pekerjaan Utama</h4>
					<tr>
						<td>
							<p>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pns">
								<input class="mdl-radio__button" type="radio" name="pu" id="pns" value="PNS/TNI/POLRI" required>
								<span for="pns">PNS/TNI/POLRI</span>
							</label>
							</p>
                        </td>
                    </tr>
                    <tr>  
						<td>
							<p>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="ps">
								<input class="mdl-radio__button" type="radio" name="pu" id="ps" value="Pegawai Swasta" required>
								<span for="ps">Pegawai Swasta</span>
							</label>
							</p>
                        </td>
                    </tr>
                    <tr>  
						<td>
							<p>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="wu">
								<input class="mdl-radio__button" type="radio" name="pu" id="wu" value="Wiraswasta/Usahawan" required>
								<span for="wu">Wiraswasta/Usahawan</span>
							</label>
							</p>
                        </td>
                    </tr>	
                    <tr>    
						<td>
							<p>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="mhs">
								<input class="mdl-radio__button" type="radio" name="pu" id="mhs" value="Pelajar/Mahasiswa" required>
								<span for="mhs">Pelajar/Mahasiswa</span>
							</label>
							</p>
						</td>
					</tr>
				</table>
		</div>
		<div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
				<table>
                    <h4>Bagaimana pemahaman Saudara tentang kemudahan prosedur/pelayanan di Kecamatan Cinambo?</h4>
					<tr>
                        <td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="tm">
								<input class="mdl-radio__button" type="radio" name="pe" id="tm" value="1" required>
								<span class="mdl_radio__label">Tidak Mudah</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="km">
								<input class="mdl-radio__button" type="radio" name="pe" id="km" value="2" required>
								<span class="mdl_radio__label">Kurang Mudah</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="m">
								<input class="mdl-radio__button" type="radio" name="pe" id="m" value="3" required>
								<span class="mdl_radio__label">Mudah</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="sm">
								<input class="mdl-radio__button" type="radio" name="pe" id="sm" value="4" required>
								<span class="mdl_radio__label">Sangat Mudah</span>
							</label>
						</td>
					</tr>
                </table>
				<br>
				<table>
                    <h4>Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?</h4>
					<tr>
                        <td>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian_tidak_jelas">
                                <input class="mdl-radio__button" type="radio" name="kesesuaian" id="kesesuaian_tidak_jelas" value="1" required>
								<span class="mdl_radio__label">Tidak Jelas</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian_kurang_jelas">
								<input class="mdl-radio__button" type="radio" name="kesesuaian" id="kesesuaian_kurang_jelas" value="2" required>
								<span class="mdl_radio__label">Kurang Jelas</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian_jelas">
								<input class="mdl-radio__button" type="radio" name="kesesuaian" id="kesesuaian_jelas" value="3" required>
								<span class="mdl_radio__label">Jelas</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian_sangat_jelas">
								<input class="mdl-radio__button" type="radio" name="kesesuaian" id="kesesuaian_sangat_jelas" value="4" required>
								<span class="mdl_radio__label">Sangat Jelas</span>
							</label>
						</td>
					</tr>
				</table>
				<br>
				<table>
                    <h4>Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?</h4>
					<tr>
						<td>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kejelasan" id="kejelasan_tidak_jelas" value="1" required>
								<span class="mdl_radio__label">Tidak Jelas</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kejelasan" id="kejelasan_kurang_jelas" value="2" required>
								<span class="mdl_radio__label">Kurang Jelas</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kejelasan" id="kejelasan_jelas" value="3" required>
								<span class="mdl_radio__label">Jelas</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kejelasan" id="kejelasan_sangat_jelas" value="4" required>
								<span class="mdl_radio__label">Sangat Jelas</span>
							</label>
						</td>
					</tr>
				</table>
				<br>
				<table>
					<h4>Bagaimana pendapat Saudara tentang kedisiplinan petugas dalam membantu pelayanan?</h4>
					<tr>
                        <td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kedisiplinan_tidak_disiplin">
								<input class="mdl-radio__button" type="radio" name="kedisiplinan" id="kedisiplinan_tidak_displin" value="1" required>
								<span class="mdl_radio__label">Tidak Disipin</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kedisiplinan_kurang_disiplin">
								<input class="mdl-radio__button" type="radio" name="kedisiplinan" id="kedisiplinan_kurang_displin" value="2" required>
								<span class="mdl_radio__label">Kurang Disipin</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kedisiplinan_disiplin">
								<input class="mdl-radio__button" type="radio" name="kedisiplinan" id="kedisiplinan_displin" value="3" required>
								<span class="mdl_radio__label">Disipin</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kedisiplinan_sangat_disiplin">
								<input class="mdl-radio__button" type="radio" name="kedisiplinan" id="kedisiplinan_sangat_displin" value="4" required>
								<span class="mdl_radio__label">Sangat Disipin</span>
							</label>
						</td>
					</tr>
				</table>
				<br>
				<table>
					<h4>Bagaimana pendapat Saudara tentang kemampuan petugas dalam memberikan pelayanan?</h4>
					<tr>
                        <td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="petugas_tidak_bertanggung_jawab">
								<input class="mdl-radio__button" type="radio" name="petugas" id="petugas_tidak_bertanggung_jawab" value="1" required>
								<span class="mdl_radio__label">Tidak Bertanggung Jawab</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="petugas_kurang_bertanggung_jawab">
								<input class="mdl-radio__button" type="radio" name="petugas" id="petugas_kurang_bertanggung_jawab" value="2" required>
								<span class="mdl_radio__label">Kurang Bertanggung Jawab</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="petugas_bertanggung_jawab">
								<input class="mdl-radio__button" type="radio" name="petugas" id="petugas_bertanggung_jawab" value="3" required>
								<span class="mdl_radio__label">Bertanggung Jawab</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="petugas_sangat_bertanggung_jawab">
								<input class="mdl-radio__button" type="radio" name="petugas" id="petugas_sangat_bertanggung_jawab" value="4" required>
								<span class="mdl_radio__label">Sangat Bertanggung Jawab</span>
							</label>
						</td>
					</tr>
				</table>
				<br>
				<table>
					<h4>Bagaimana pendapat Saudara tentang kemampuan petugas dalam memberikan pelayanan?</h4>
					<tr>
                        <td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect"  for="pelayanan_tidak_mampu">
								<input class="mdl-radio__button" type="radio" name="pelayanan" id="pelayanan_tidak_mampu" value="1" required>
								<span class="mdl_radio__label"="pelayanan_tidak_mampu">Tidak Mampu</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect"  for="pelayanan_kurang_mampu">
								<input class="mdl-radio__button" type="radio" name="pelayanan" id="pelayanan_kurang_mampu" value="2" required>
								<span class="mdl_radio__label"="pelayanan_kurang_mampu">Kurang Mampu</span>	
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect"  for="pelayanan_mampu">
								<input class="mdl-radio__button" type="radio" name="pelayanan" id="pelayanan_mampu" value="3" required>
								<span class="mdl_radio__label"="pelayanan_mampu">Mampu</span>	
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect"  for="pelayanan_sangat_mampu">
								<input class="mdl-radio__button" type="radio" name="pelayanan" id="pelayanan_sangat_mampu" value="4" required>
								<span class="mdl_radio__label"="pelayanan_sangat_mampu">Sangat Mampu</span>	
							</label>
						</td>
					</tr>
				</table>
				<br>
				<table>
					<h4>Bagaimana pendapat Saudara tentang kecepatan pelayanan di Kecamatan Cinambo ini?</h4>
					<tr>
                        <td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kecepatan" id="kecepatan_tidak_cepat" value="1" required>
								<span class="mdl_radio__label"="kecepatan_tidak_cepat">Tidak Cepat</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kecepatan" id="kecepatan_kurang_cepat" value="2" required>
								<span class="mdl_radio__label"="kecepatan_kurang_cepat">Kurang Cepat</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kecepatan" id="kecepatan_cepat" value="3" required>
								<span class="mdl_radio__label"="kecepatan_cepat">Cepat</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kecepatan" id="kecepatan_sangat_cepat" value="4" required>
								<span class="mdl_radio__label"="kecepatan_sangat_cepat">Sangat Cepat</span>
							</label>
						</td>
					</tr>
				</table>
				<br>
				<table>
                    <h4>Bagaimana pendapat Saudara tentang keadilan untuk mendapatkan pelayanan di Kecamatan Cinambo ini?</h4>
					<tr>
                        <td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="keadilan" id="keadilan_tidak_adil" value="1" required>
								<span class="mdl_radio__label"="keadilan_tidak_adil">Tidak Adil</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="keadilan" id="keadilan_kurang_adil" value="2" required>
								<span class="mdl_radio__label"="keadilan_kurang_adil">Kurang Adil</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="keadilan" id="keadilan_adil" value="3" required>
								<span class="mdl_radio__label"="keadilan_adil">Adil</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="keadilan" id="keadilan_sangat_adil" value="4" required>
								<span class="mdl_radio__label"="keadilan_sangat_adil">Sangat Adil</span>
							</label>
						</td>
					</tr>
				</table>
				<br>
				<table>
					<h4>Bagaimana pendapat Saudara tentang kesopanan dan keramahan dalam mendapatkan pelayanan?</h4>
					<tr>
                        <td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kesopanan" id="kesopanan_tidak_sopan" value="1" required>
								<span class="mdl_radio__label"="kesopanan_tidak_sopan">Tidak Sopan dan Ramah</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kesopanan" id="kesopanan_kurang_sopan" value="2" required>
								<span class="mdl_radio__label"="kesopanan_kurang_sopan">Kurang Sopan dan Ramah</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kesopanan" id="kesopanan_sopan" value="3" required>
								<span class="mdl_radio__label"="kesopanan_sopan">Sopan dan Ramah</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kesopanan" id="kesopanan_sangat_sopan" value="4" required>
								<span class="mdl_radio__label"="kesopanan_sangat_sopan">Sangat Sopan dan Ramah</span>
							</label>
						</td>
					</tr>
				</table>
				<br>
				<table>
					<h4>Bagaimana pendapat Saudara tentang kewajaran biaya untuk mendapatkan pelayanan?</h4>
					<tr>
                        <td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kewajaran" id="kewajaran_tidak_wajar" value="1" required>
								<span class="mdl_radio__label"="kewajaran_tidak_wajar">Tidak Wajar</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kewajaran" id="kewajaran_kurang_wajar" value="2" required>
								<span class="mdl_radio__label"="kewajaran_kurang_wajar">Kurang Wajar</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kewajaran" id="kewajaran_wajar" value="3" required>
								<span class="mdl_radio__label"="kewajaran_wajar">Wajar</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kewajaran" id="kewajaran_sangat_wajar" value="4" required>
								<span class="mdl_radio__label"="kewajaran_sangat_wajar">Sangat Wajar</span>
							</label>
						</td>
					</tr>
				</table>
				<br>
				<table>
                    <h4>Bagaimana pendapat Saudara tentang kesesuaian antara biaya yang dibayarkan dengan biaya yang telah ditetapkan?</h4>
					<tr>
                        <td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kesesuaian2" id="kesesuaian_tidak_sesuai" value="1" required>
								<span class="mdl_radio__label"="kesesuaian_tidak_sesuai">Selalu Tidak Sesuai</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kesesuaian2" id="kesesuaian_kurang_sesuai" value="2" required>
								<span class="mdl_radio__label"="kesesuaian_kurang_sesuai">Kadang-kadang Kurang Sesuai</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kesesuaian2" id="kesesuaian_sesuai" value="3" required>
								<span class="mdl_radio__label"="kesesuaian_sesuai">Banyak Sesuai</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kesesuaian2" id="kesesuaian_sangat_kesesuaian" value="4" required>
								<span class="mdl_radio__label"="kesesuaian_sangat_kesesuaian">Selalu Sesuai</span>
							</label>
						</td>
					</tr>
				</table>
				<br>
				<table>
					<h4>Bagaimana pendapat Saudara tentang ketepatan pelaksanaan terhadap jadwal waktu pelaksanaan?</h4>
					<tr>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="ketepatan" id="ketepatan_tidak_tepat" value="1" required>
								<span class="mdl_radio__label"="ketepatan_tidak_tepat">Selalu Tidak Tepat</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="ketepatan" id="ketepatan_kurang_tepat" value="2" required>
								<span class="mdl_radio__label"="ketepatan_kurang_tepat">Kadang-kadang Tepat</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="ketepatan" id="ketepatan_tepat" value="3" required>
								<span class="mdl_radio__label"="ketepatan_tepat">Banyak Tepat</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="ketepatan" id="ketepatan_sangat_tepat" value="4" required>
								<span class="mdl_radio__label"="ketepatan_sangat_tepat">Selalu Tepat</span>
							</label>
						</td>
					</tr>
				</table>
				<br>
				<table>
                    <h4>Bagaimana pendapat Saudara tentang kenyamanan di lingkungan Kecamatan Cinambo?</h4>
					<tr>
                        <td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kenyamanan" id="kenyamanan_tidak_nyaman" value="1" required>
								<span class="mdl_radio__label"="kenyamanan_tidak_nyaman">Tidak Nyaman</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kenyamanan" id="kenyamanan_kurang_nyaman" value="2" required>
								<span class="mdl_radio__label"="kenyamanan_kurang_nyaman">Kurang Nyaman</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kenyamanan" id="kenyamanan_nyaman" value="3" required>
								<span class="mdl_radio__label"="kenyamanan_nyaman">Nyaman</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="kenyamanan" id="kenyamanan_sangat_nyaman" value="4" required>
								<span class="mdl_radio__label"="kenyamanan_sangat_nyaman">Sangat Nyaman</span>
							</label>
						</td>
					</tr>
				</table>
				<br>
				<table>
					<h4>Bagaimana pendapat Saudara tentang keamanan pelayanan di Kecamatan Cinambo?</h4>
					<tr>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="keamanan" id="keamanan_tidak_aman" value="1" required>
								<span class="mdl_radio__label"="keamanan_tidak_aman">Tidak Aman</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="keamanan" id="keamanan_kurang_aman" value="2" required>
								<span class="mdl_radio__label"="keamanan_kurang_aman">Kurang Aman</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="keamanan" id="keamanan_aman" value="3" required>
								<span class="mdl_radio__label"="keamanan_aman">Aman</span>
							</label>
						</td>
						<td>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="">
								<input class="mdl-radio__button" type="radio" name="keamanan" id="keamanan_sangat_aman" value="4" required>
								<span class="mdl_radio__label"="keamanan_sangat_aman">Sangat Aman</span>
							</label>
						</td>
					</tr>
                </table>
                <br><br>
				<input class="mdl-button mdl-js-button mdl-button--raised" onclick="M.toast({html: 'Form di Reset'})" type="submit" name="submit"
				value="Save" class="btn waves-effect waves-light">
				<input class="mdl-button mdl-js-button mdl-button--raised" onclick="M.toast({html: 'Form di Reset'})" type="reset" name="reset"
				value="RESET" class="btn waves-effect waves-light red">
				<br>
			</form>
		</div>
	</div>
</main>