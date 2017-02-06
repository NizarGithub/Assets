<script> 
$(document).ready(function(){	
	$(".cb-enable").click(function(){
		var parent = $(this).parents('.switch');
		$('.cb-disable',parent).removeClass('selected');
		$(this).addClass('selected');
	});
	$(".cb-disable").click(function(){
		var parent = $(this).parents('.switch');
		$('.cb-enable',parent).removeClass('selected');
		$(this).addClass('selected');
	});	
		
	// username checker
	$("#username").change(function(){ 
    $('#pesan').html("<span class='formloading'>checking...</span>");	
    var username  = $("#username").val(); 
		$.ajax({
		 type:"POST",
		 url:"apps/app_user/controller/check_user.php",    
		 data: "act=user&username=" + username,
		 success: function(data){                 
			if(data==0){
				$("#pesan").html("<span class='form_ok'>Username availible</span>");	
			} 
			else if(data==2){
				$("#pesan").html("<span class='form_error'>Username not valid</span>"); 
			} 
			else {
				$("#pesan").html("<span class='form_error'>Username not availible</span>");   
		   }
		}
		}); 		
		setTimeout(function(){
			$(".form_ok").fadeOut(1000, function() {
			});				
		}, 3000);		
	});
	
	
	
	// email checker	
	$("#email").change(function(){ 		
		$('#pesan_email').html("<span class='formloading'>checking...</span>");	
		var email  = $("#email").val(); 		
		$.ajax({
		 type:"POST",
		 url:"apps/app_user/controller/check_user.php",    
		 data: "act=email&email=" + email,
		 success: function(data){                 
			if(data==0){
				$("#email").parent().append("<span class='form_ok'>Email availible</span>");	
			} 
			else if(data==2){
				$("#email").parent().append("<span class='form_error'>Email not valid</span>"); 
			} 
			else {
				$("#email").parent().append("<span class='form_error'>Email not availible</span>");   
		   }
		}
		}); 		
		setTimeout(function(){
			$(".form_ok").fadeOut(1000, function() {
			});				
		}, 3000);
	});
	
	// re-password checker	
	$("#repassword").change(function(){
	
		var password  = $("#pass").val(); 	
		var repassword  = $("#repassword"); 
			if(password==repassword.val()){
				repassword.parent().append("<span class='form_ok'>Passed</span>");	
			} 
			else {
				repassword.parent().append("<span class='form_error'>Re-password not valid</span>");   
		   }
		
		setTimeout(function(){
			$(".form_ok").fadeOut(1000, function() {
			});				
		}, 3000);	
			
	});
	
	$.getScript(
		'apps/app_user/controller/pass.min.js',
		function() {
			$('form').passroids({
				main : "#pass"
			});
		}
	);
	
	
});
</script>
<div class=" box-left">
	<div class="box">								
		<header class="dark">
			<h5>Data kelas</h5>
		</header>								
		<div>
			<table>
				<tr>
                                    <td class="row-title"><span class="tips" title="ID Kelas" width="40%">ID Kelas</td>
                                    <td>
                                    <input type="text" id="username" name="id" style="width: 100%" required class='form-control'/>
                                    </td>
				</tr>
				<tr>
                                    <td class="row-title"><span class="tips" title="Nama Kelas">Nama Kelas</td>
                                    <td>
                                        <input type="password" name="nama" style="width: 100%" id="pass"></td>
				</tr>
				<tr>
					<td class="row-title"><span class="tips" title="Wali kelas">Wali Kelas</td>
					<td>
                                            <select name="wkelas" id="select" style="width: 100%">
                                                <option value=""></option>
                                                <?php 
                                                $qguru = mysql_query("SELECT * FROM pengajar ORDER BY nama_lengkap ASC");
                                                while($dguru = mysql_fetch_array($qguru)) {
                                                    echo "<option value='".$dguru['id_pengajar']."'>".$dguru['nama_lengkap']."</option>";
                                                }
                                                ?>
                                            </select>
					</td>
				</tr>
                                <tr>
					<td class="row-title"><span class="tips" title="Ketua kelas">Ketua Kelas</td>
					<td>
                                            <select name="kkelas" id="select" style="width: 100%">
                                                <option value=""></option>
                                                <?php 
                                                $qsiswa = mysql_query("SELECT * FROM siswa ORDER BY nama_lengkap ASC");
                                                while($dsiswa = mysql_fetch_array($qsiswa)) {
                                                    echo "<option value='".$dsiswa['id']."'>".$dsiswa['nis']." - ".$dsiswa['nama_lengkap']."</option>";
                                                }
                                                ?>
                                            </select>
					</td>
				</tr>
                                
			</table>			
		</div>  
	</div>
</div>
<div class="col-lg-6 box-right">
	<div class="box">								
		<header class="dark">
			<h5>Status kelas</h5>
		</header>								
		<div>
			<table>
				<tr>
					<td class="row-title"><span class="tips" title="Status">Pilih Status</td>
					<td style="padding: 5px 10px;">
						<p class="switch">
                                                    <input id="radio1" value="1" name="status" type="radio" selected class="invisible">
                                                    <input id="radio2" value="0" name="status" type="radio" class="invisible">
                                                    <label for="radio1" class="cb-enable selected"><span>Aktif</span></label>
                                                    <label for="radio2" class="cb-disable"><span>Tidak </span></label>
					</td>
				</tr>
			</table>	
		</div>  
	</div> 
</div>  
